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
            $total = $male_count + $female_count;
            $bry = [
                'barangay' => $center->barangay->name,
                'evacuees_total' => $total > 0 ? $total : '----',
                'family_count' => isset($center->evacuee) != null ? $center->evacuee->family_count : '----',
                'female_count' => $female_count > 0 ? $female_count : '----',
                'male_count' => $male_count > 0 ? $male_count : '----',
                'pwd_count' => isset($center->evacuee) != null ? $center->evacuee->pwd_count : '----',
                'max_capacity' => $center->max_capacity,
                'status' => $center->is_evacuation_center_full ? 'No' : 'Yes',
            ];
            array_push($centers, $bry);
        }

        return Excel::download(new BarangaysExport($centers), 'barangay-report.xlsx');
    }
}
