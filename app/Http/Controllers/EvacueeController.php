<?php

namespace App\Http\Controllers;

use App\Models\Evacuee;
use App\Models\EvacueeInfo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EvacueeController extends Controller
{
    /**
     * @var EvacueeInfo
     */
    private $info;

    /**
     * @param EvacueeInfo $info
     */
    public function __construct(EvacueeInfo $info) {
        $this->info = $info;
    }

    /**
     * @param Evacuee $evacuee
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Evacuee $evacuee, Request $request)
    {
        $lists = $this->info->with('evacuee')
            ->where('evacuee_id', $evacuee->id)
            ->where(\DB::raw('CONCAT(first_name,last_name)'), 'like', '%' . $request->keyword . '%')
            ->paginate(5);

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
        $evacuee->evacueeInfos()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'age' => $request->age,
            'is_head' => $request->is_head,
            'purok' => $request->purok,
        ]);

        $this->updateFemaleAndMaleCounts($evacuee);
        return redirect()->back()->with('msg', 'Evacuee successfully added.');
    }

    /**
     * @param $evacuee
     * @return void
     */
    private function updateFemaleAndMaleCounts($evacuee)
    {
        $maleCount = $evacuee->evacueeInfos->where('gender', 'male')->count();
        $femaleCount = $evacuee->evacueeInfos->where('gender', 'female')->count();
        $evacuee->update([
            'male_count' => $maleCount,
            'female_count' => $femaleCount,
        ]);
    }
}
