<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assurance extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'frais_assurance',
    ];

    public function accountassurance(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AccountAssurance::class);
    }
}
