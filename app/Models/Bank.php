<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'taux_emprunt',
        'frais_compte',
        'max_emprunt'
    ];

    public function accountbank(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
       return $this->hasMany(AccountBank::class);
    }
}
