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
            ]);
    }
}
