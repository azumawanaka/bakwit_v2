<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barangay extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lat',
        'long',
        'is_flood_prone',
        'is_storm_surge',
        'is_land_slide',
        'is_earthquake',
        'is_tsunami',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'is_flood_prone' => 'boolean',
        'is_storm_surge' => 'boolean',
        'is_land_slide' => 'boolean',
        'is_earthquake' => 'boolean',
        'is_tsunami' => 'boolean',
    ];

    /**
     * @return HasOne
     */
    public function evacuationCenter(): HasOne
    {
        return $this->hasOne(EvacuationCenter::class);
    }
}
