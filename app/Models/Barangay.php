<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'is_flood_prone' => 'boolean',
        'is_storm_surge' => 'boolean',
    ];

    /**
     * @return HasOne
     */
    public function evacuationCenter(): HasOne
    {
        return $this->hasOne(EvacuationCenter::class);
    }
}
