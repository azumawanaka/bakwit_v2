<?php

namespace App\Services;

use App\Models\Evacuee;
use Illuminate\Database\Eloquent\Model;

class EvacueeService extends Model
{
    /**
     * @param Evacuee $model
     */
    public function __construct(Evacuee $model)
    {
        $this->model = $model;
    }

    /**
     * @param $evacuee
     * @return void
     */
    public function updateFemaleAndMaleCounts($evacuee)
    {
        $maleCount = $this->model->evacueeInfos()
            ->where('gender', 'male')
            ->count();
        $femaleCount = $this->model->evacueeInfos()
            ->where('gender', 'female')
            ->count();
        $this->model->update([
            'male_count' => $maleCount,
            'female_count' => $femaleCount,
        ]);
    }
}
