<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use Illuminate\Http\JsonResponse;

class GsisController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.gsis.index');
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
            'evacuationCenter.files',
            ])
            ->get();
        return response()->json($locations);
    }
}
