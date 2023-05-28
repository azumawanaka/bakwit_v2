<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EvacuationCenter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'barangay_id',
        'evacuation_center_type_id',
        'max_capacity',
        'is_evacuation_center_full',
        'needs',
    ];

    /**
     * @var int
     */
    protected $perPage = 10;

    /**
     * @var string[]
     */
    protected $casts = [
        'is_evacuation_center_full' => 'boolean',
    ];

    /**
     * @return BelongsTo
     */
    public function evacuationCenterType(): BelongsTo
    {
        return $this->belongsTo(EvacuationCenterType::class);
    }

    /**
     * @return BelongsTo
     */
    public function barangay(): BelongsTo
    {
        return $this->belongsTo(Barangay::class);
    }

    /**
     * @return HasOne
     */
    public function evacuee(): HasOne
    {
        return $this->hasOne(Evacuee::class);
    }

    /**
     * @return HasMany
     */
    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }

    public function totalPregnant()
    {
        return isset($this->evacuee->evacueeInfos) ? $this->evacuee->evacueeInfos()->where('is_pregnant', true)->get()->count() : 0;
    }

    public function totalInfant()
    {
        return isset($this->evacuee->evacueeInfos) ? $this->evacuee->evacueeInfos()->where('is_infant', true)->get()->count() : 0;
    }

    public function totalSenior()
    {
        return isset($this->evacuee->evacueeInfos) ? $this->evacuee->evacueeInfos()->where('is_senior', true)->get()->count() : 0;
    }

    public function totalPwd()
    {
        return isset($this->evacuee->evacueeInfos) ? $this->evacuee->evacueeInfos()->where('is_pwd', true)->get()->count() : 0;
    }

    public function totalFamilyHead()
    {
        return isset($this->evacuee->evacueeInfos) ? $this->evacuee->evacueeInfos()->where('is_head', true)->get()->count() : 0;
    }
}
