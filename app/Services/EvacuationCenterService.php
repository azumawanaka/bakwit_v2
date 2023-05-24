<?php

namespace App\Services;

use App\Models\EvacuationCenter;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

class EvacuationCenterService extends Model
{
    /**
     * @param EvacuationCenter $model
     */
    public function __construct(EvacuationCenter $model)
    {
        $this->model = $model;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function store($request)
    {
        return $this->model->create([
            'evacuation_center_type_id' => intVal($request['evacuation_center_type_id']),
            'barangay_id' => intVal($request['barangay_id']),
            'max_capacity' => $request['max_capacity'],
        ]);
    }

    /**
     * @param $request
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function centers($request)
    {
        return $this->model->with([
                'evacuationCenterType',
                'barangay',
                'evacuee',
                'evacuee.evacueeInfos',
                'files'
            ])
            ->whereHas('barangay', function ($query) use ($request){
                $query->where('name', 'like', '%'.$request->keyword.'%');
            })
            ->orWhereHas('evacuationCenterType', function ($query) use ($request){
                $query->where('name', 'like', '%'.$request->keyword.'%');
            })
            ->orderBy('updated_at', 'desc');
    }
}
