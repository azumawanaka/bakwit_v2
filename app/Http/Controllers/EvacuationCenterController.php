<?php

namespace App\Http\Controllers;

use App\Http\Requests\Evacuee\UpdateEvacueeRequest;
use App\Models\Barangay;
use App\Models\EvacuationCenter;
use App\Models\EvacuationCenterType;
use App\Models\Evacuee;
use App\Services\BarangayService;
use App\Services\EvacuationCenterService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvacuationCenterController extends Controller
{
    /**
     * @var EvacuationCenterService
     */
    private $evacuationCenterService;

    /**
     * @var BarangayService
     */
    private $brgyService;

    /**
     * @param EvacuationCenterService $evacuationCenterService
     * @param BarangayService $brgyService
     */
    public function __construct(
        EvacuationCenterService $evacuationCenterService,
        BarangayService $brgyService
    ) {
        $this->evacuationCenterService = $evacuationCenterService;
        $this->brgyService = $brgyService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $barangayIds = [];
        $storedBarangay = EvacuationCenter::select('barangay_id')->get();
        foreach ($storedBarangay as $brgy) {
            $barangayIds[] = $brgy->barangay_id;
        }

        $evacuationCenters = $this->evacuationCenterService->centers($request)->paginate();
        $barangays = Barangay::whereNotIn('id', $barangayIds)->orderBy('name', 'asc')->get();
        return view('pages.evacuation_center.index', [
            'barangays' => $barangays,
            'evacuation_center_types' => EvacuationCenterType::all(),
            'evacuationCenters' => $evacuationCenters,
            'allBarangay' => Barangay::orderBy('name', 'asc')->get(),
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $evacuationCenter = $this->evacuationCenterService->store($request->all());
            $this->brgyService->updateBrgy($request);

            if($request->hasFile('files')) {
                $this->storeFiles($evacuationCenter, $request);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('msg', 'Error when saving. Please try again or contact administrator.');
        }
        return redirect()->back()->with('msg', 'Evacuation Center is added!');
    }

    /**
     * @param $evacuationCenter
     * @param $request
     * @return void
     */
    private function storeFiles($evacuationCenter, $request): void
    {
        $files = $request->file('files');
        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $filePath = $file->storePubliclyAs('public_uploads/'.$evacuationCenter->id, $filename, 'public');
            $evacuationCenter->files()->create([
                'name' => $filename,
                'path' => $filePath,
            ]);
        }
    }

    /**
     * @param EvacuationCenter $bdrrmo
     * @return JsonResponse
     */
    public function getCenter(EvacuationCenter $bdrrmo): JsonResponse
    {
        $data = [
            'max_capacity' => $bdrrmo->max_capacity,
            'needs' => $bdrrmo->needs,
            'barangay' => $bdrrmo->barangay,
            'center_type' => $bdrrmo->evacuation_center_type_id,
            'evacuee' => $bdrrmo->evacuee,
            'files' => $bdrrmo->files,
        ];
        return response()->json($data);
    }

    /**
     * @param EvacuationCenter $bdrrmo
     * @param Request $request
     * @return void
     */
    public function update(EvacuationCenter $bdrrmo, Request $request)
    {
        if (auth()->user()->type === 1) {
            $familyCount = !isset($bdrrmo->evacuee->family_count) ? 0 : $bdrrmo->evacuee->family_count;
            $bdrrmo->update([
                'evacuation_center_type_id' => $request->evacuation_center_type_id,
                'max_capacity' => $request->max_capacity,
                'is_evacuation_center_full' => $request->max_capacity == $familyCount,
            ]);
            $bdrrmo->barangay->update([
                'is_flood_prone' => $request->is_flood_prone === 'on',
                'is_storm_surge' => $request->is_storm_surge === 'on',
                'is_land_slide' => $request->is_land_slide === 'on',
                'is_earthquake' => $request->is_earthquake === 'on',
                'is_tsunami' => $request->is_tsunami === 'on',
            ]);
        } else {
            $evacuees = $request->only([
                'family_count',
            ]);

            if ($bdrrmo->evacuee()->count() > 0) {
                $familyCount = !isset($request->family_count) ? 0 : $request->family_count;
                $isFull = $bdrrmo->max_capacity <= $familyCount;

                $bdrrmo->update([
                    'evacuation_center_type_id' => $bdrrmo->evacuationCenterType->id,
                    'is_evacuation_center_full' => $isFull,
                    'needs' => $request->needs,
                ]);
                $bdrrmo->evacuee()->update($evacuees);
            } else {
                $this->storeEvacueesCounts($bdrrmo->id, $evacuees);
            }
        }

        if($request->hasFile('files')) {
            $this->deleteFileDirectory($bdrrmo->id);
            $this->updateFiles($bdrrmo, $request);
        }

        return redirect()->back()->with('msg', 'Evacuation Center is modified!');
    }

    /**
     * @param $evacuationId
     * @param $evacuees
     * @return void
     */
    private function storeEvacueesCounts($evacuationId, $evacuees): void
    {
        Evacuee::create([
            'evacuation_center_id' => $evacuationId,
            'family_count' => $evacuees['family_count'],
        ]);
    }

    /**
     * @param $evacuation
     * @param $request
     * @return void
     */
    private function updateFiles($evacuation, $request): void
    {
        $files = $request->file('files');
        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $filePath = $file->storePubliclyAs('public_uploads/'.$evacuation->id, $filename, 'public');
            if ($evacuation->files()->count() > 0) {
                $evacuation->files()->update([
                    'name' => $filename,
                    'path' => $filePath,
                ]);
            } else {
                $evacuation->files()->create([
                    'name' => $filename,
                    'path' => $filePath,
                ]);
            }
        }
    }

    /**
     * @param EvacuationCenter $bdrrmo
     * @return RedirectResponse
     */
    public function destroy(EvacuationCenter $bdrrmo)
    {
        $this->deleteFileDirectory($bdrrmo->id);
        $bdrrmo->delete();
        return redirect()->back()->with('msg', 'Evacuation center successfully deleted.');
    }

    /**
     * @param $evacuationId
     * @return void
     */
    private function deleteFileDirectory($evacuationId): void
    {
        $filePath = '/public/public_uploads/'.$evacuationId;
        Storage::deleteDirectory($filePath);
    }
}
