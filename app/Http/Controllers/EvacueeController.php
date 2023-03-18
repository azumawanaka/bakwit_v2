<?php

namespace App\Http\Controllers;

use App\Models\Evacuee;
use App\Models\EvacueeInfo;
use App\Services\EvacueeInfoService;
use App\Services\EvacueeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EvacueeController extends Controller
{
    /**
     * @var EvacueeInfo
     */
    private $info;

    /**
     * @var EvacueeService
     */
    private $evacueeService;

    /**
     * @var EvacueeInfoService
     */
    private $evacueeInfoService;

    /**
     * @param EvacueeInfo $info
     * @param EvacueeService $evacueeService
     * @param EvacueeInfoService $evacueeInfoService
     */
    public function __construct(
        EvacueeInfo $info,
        EvacueeService $evacueeService,
        EvacueeInfoService $evacueeInfoService,
    ) {
        $this->info = $info;
        $this->evacueeService = $evacueeService;
        $this->evacueeInfoService = $evacueeInfoService;
    }

    /**
     * @param Evacuee $evacuee
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Evacuee $evacuee, Request $request)
    {
        $limit = 5;
        $lists = $this->evacueeInfoService->getEvacueesList($evacuee, $request->keyword, $limit);
        return view('pages.evacuees.index', [
            'evacuee' => $evacuee,
            'brgy' => $evacuee->evacuationCenter->barangay,
            'evacuees' => $lists
        ]);
    }

    /**
     * @param Evacuee $evacuee
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Evacuee $evacuee, Request $request): RedirectResponse
    {
        $this->evacueeInfoService->storeEvacuees($evacuee, $request);
        $this->evacueeService->updateFemaleAndMaleCounts($evacuee);
        return redirect()->back()->with('msg', 'Evacuee successfully added.');
    }

    private function updateAdultOrChildrenCounts($evacuee)
    {

    }
}
