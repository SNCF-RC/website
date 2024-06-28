<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountAssurance extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'company_id',
        'assurance_id',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function assuranceOperation(): BelongsTo
    {
        return $this->belongsTo(AssuranceOperation::class);
    }

    public function assurance(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Assurance::class);
    }
}
