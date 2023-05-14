<?php

namespace App\Services;

use App\Models\Barangay;
use Illuminate\Database\Eloquent\Model;

class BarangayService extends Model
{
    /**
     * @param Barangay $model
     */
    public function __construct(Barangay $model)
    {
        $this->model = $model;
    }

    /**
     * @param $request
     * @return bool
     */
    public function updateBrgy($request): bool
    {
        return $this->model->find(intval($request['barangay_id']))
            ->update([
                'is_flood_prone' => $request['is_flood_prone'] === 'on',
                'is_storm_surge' => $request['is_storm_surge'] === 'on',
                'is_land_slide' => $request['is_land_slide'] === 'on',
                'is_earthquake' => $request['is_earthquake'] === 'on',
                'is_tsunami' => $request['is_tsunami'] === 'on',
            ]);
    }
}
