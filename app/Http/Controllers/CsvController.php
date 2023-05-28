<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\EvacuationCenter;
use App\Services\EvacuationCenterService;
use Illuminate\Http\Request;
use App\Exports\BarangaysExport;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    /**
     * @var EvacuationCenterService
     */
    private $evacuationCenterService;

    /**
     * @param EvacuationCenterService $evacuationCenterService
     */
    public function __construct(EvacuationCenterService $evacuationCenterService)
    {
        $this->evacuationCenterService = $evacuationCenterService;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function generateReport(Request $request)
    {
        $evacuationCenters = EvacuationCenter::with([
                'evacuationCenterType',
                'barangay',
                'evacuee',
                'evacuee.evacueeInfos',
                'files'
            ])
            ->whereHas('barangay', function ($query) use ($request){
                $query->orderBy('name', 'asc');
            })
            ->get();
        $centers = [];
        foreach ($evacuationCenters as $center) {
            $male_count = isset($center->evacuee) != null ? $center->evacuee->male_count : 0;
            $female_count = isset($center->evacuee) != null ? $center->evacuee->female_count : 0;
            if (isset($center->evacuee->evacueeInfos)) {
                $total = $center->evacuee->evacueeInfos->count() .'/'. $center->max_capacity;
            }
            $bry = [
                'barangay' => $center->barangay->name,
                'evacuees_total' => $total,
                'male_count' => $male_count > 0 ? $male_count : '----',
                'female_count' => $female_count > 0 ? $female_count : '----',
                'adult_count' => isset($center->evacuee->adult_count) > 0 ? $center->evacuee->adult_count : '----',
                'children_count' => isset($center->evacuee->children_count) > 0 ? $center->evacuee->children_count : '----',
                'infant_count' => $center->totalInfant(),
                'senior_count' => $center->totalSenior(),
                'pwd_count' => $center->totalPwd(),
                'pregnant_count' => $center->totalPregnant(),
                'family_head_count' => $center->totalFamilyHead(),
                'status' => $center->is_evacuation_center_full ? 'No' : 'Yes',
            ];
            array_push($centers, $bry);
        }

        return Excel::download(new BarangaysExport($centers), 'barangay-report.xlsx');
    }
}
