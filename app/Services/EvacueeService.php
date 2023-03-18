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
    public function updateCounts($evacuee)
    {
        $maleCount = $evacuee->evacueeInfos()
            ->where('gender', 'male')
            ->count();
        $femaleCount = $evacuee->evacueeInfos()
            ->where('gender', 'female')
            ->count();
        $pwdCount = $evacuee->evacueeInfos()
            ->where('is_pwd', true)
            ->count();

        $adultCount = $evacuee->evacueeInfos()
            ->where('age', '>', 12)
            ->count();
        $childrenCount = $evacuee->evacueeInfos()
            ->where('age', '<', 13)
            ->count();

        $evacuee->update([
            'male_count' => $maleCount,
            'female_count' => $femaleCount,
            'adult_count' => $adultCount,
            'children_count' => $childrenCount,
            'pwd_count' => $pwdCount,
        ]);
    }
}
