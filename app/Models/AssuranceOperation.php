<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssuranceOperation extends Model
{
    protected $fillable = [
        'account_assurance_id',
    ];

    use SoftDeletes, HasFactory;

    public function accountassurance(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(AccountAssurance::class);
    }

}
