<?php

namespace App\Http\Controllers;

use App\Services\EvacuationCenterService;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('home', [
            'evacuationCenters' => $evacuationCenters,
        ]);
    }
}
