<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\EvacuationCenter;
use App\Models\EvacuationCenterType;
use App\Services\EvacuationCenterService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BarangayController extends Controller
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
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $evacuationCenters = $this->evacuationCenterService->centers($request)->get();
        return view('pages.barangay.index', [
            'evacuation_center_types' => EvacuationCenterType::all(),
            'evacuationCenters' => $evacuationCenters,
            'allBarangay' => Barangay::orderBy('name', 'asc')->get(),
        ]);
    }

    /**
     * @param Barangay $barangay
     * @return JsonResponse
     */
    public function getBarangay(Barangay $barangay): JsonResponse
    {
        $location = Barangay::with([
                'evacuationCenter',
                'evacuationCenter.evacuationCenterType',
                'evacuationCenter.evacuee',
                'evacuationCenter.evacuee.evacueeInfos',
                'evacuationCenter.files',
            ])
            ->where('barangays.id', $barangay->id)
            ->first();
        return response()->json($location);
    }

    /**
     * @return JsonResponse
     */
    public function fetchLocations(): JsonResponse
    {
        $locations = Barangay::with([
            'evacuationCenter',
            'evacuationCenter.evacuationCenterType',
            'evacuationCenter.evacuee',
            'evacuationCenter.evacuee.evacueeInfos',
            'evacuationCenter.files',
            ])
            ->get();
        return response()->json($locations);
    }
}
