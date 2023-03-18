<?php

namespace App\Services;

use App\Models\EvacueeInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class EvacueeInfoService extends Model
{
    /**
     * @param EvacueeInfo $model
     */
    public function __construct(EvacueeInfo $model)
    {
        $this->model = $model;
    }

    /**
     * @param $evacuee
     * @param $keyword
     * @return LengthAwarePaginator
     */
    public function getEvacueesList($evacuee, $keyword): LengthAwarePaginator
    {
        return $this->model->with('evacuee')
            ->where('evacuee_id', $evacuee->id)
            ->where(\DB::raw('CONCAT(first_name,last_name)'), 'like', '%' . $keyword . '%')
            ->paginate();
    }

    /**
     * @param $evacuee
     * @param $request
     * @return void
     */
    public function storeEvacuees($evacuee, $request)
    {
        $evacuee->evacueeInfos()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'age' => $request->age,
            'is_head' => isset($request->is_head),
            'is_pwd' => isset($request->is_pwd),
            'purok' => $request->purok,
        ]);
    }

    /**
     * @param $info
     * @param $request
     * @return void
     */
    public function updateEvacuee($info, $request)
    {
        $info->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'gender' => $request->gender,
            'is_head' => isset($request->is_head),
            'is_pwd' => isset($request->is_pwd),
            'purok' => $request->purok,
        ]);
    }
}
