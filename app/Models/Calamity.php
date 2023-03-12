<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calamity extends Model
{
    use HasFactory;

    public const TROPICAL_CYCLONE_CLASSIFICATIONS = [
        'Tropical Depression',
        'Tropical Storm',
        'Severe Tropical Storm',
        'Typhoon',
        'Super Typhoon',
    ];

    public const EARTHQUAKE_INTENSITIES = [
        'I (Scarcely Perceptible)',
        'II (Slightly Felt)',
        'III (Weak)',
        'IV (Moderately Strong)',
        'V (Strong)',
        'VI (Very Strong)',
        'VII (Destructive)',
        'VIII (Very Destructive)',
        'IX (Devastating)',
        'X (Completely Devastating)',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'info_arr',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'info_arr' => 'array',
    ];
}
