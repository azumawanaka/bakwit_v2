<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\EvacuationCenter;
use App\Models\EvacuationCenterType;
use App\Services\EvacuationCenterService;
use Illuminate\Http\Request;

class MdrrmoController extends Controller
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
        $evacuationCenters = $this->evacuationCenterService->centers($request)->paginate();
        return view('pages.mdrrmo.index', [
            'evacuation_center_types' => EvacuationCenterType::all(),
            'evacuationCenters' => $evacuationCenters,
            'allBarangay' => Barangay::orderBy('name', 'asc')->get(),
        ]);
    }
}
