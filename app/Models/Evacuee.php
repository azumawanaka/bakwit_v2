<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evacuee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'evacuation_center_id',
        'family_count',
        'male_count',
        'female_count',
        'pwd_count',
    ];

    /**
     * @return BelongsTo
     */
    public function evacuationCenter(): BelongsTo
    {
        return $this->belongsTo(EvacuationCenter::class);
    }
}
