<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EvacueeInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'evacuee_id',
        'first_name',
        'last_name',
        'gender',
        'age',
        'is_head',
        'is_pwd',
        'purok',
        'is_pregnant',
        'is_infant',
        'is_senior',
    ];

    /**
     * @var int
     */
    protected $perPage = 10;

    /**
     * @var string[]
     */
    protected $casts = [
        'is_head' => 'boolean',
        'is_pwd' => 'boolean',
        'is_pregnant' => 'boolean',
        'is_infant' => 'boolean',
        'is_senior' => 'boolean',
    ];

    public function getFullNameAttribute() {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
   }

    public function evacuee(): BelongsTo
    {
        return $this->belongsTo(Evacuee::class);
    }
}
