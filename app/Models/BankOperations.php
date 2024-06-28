<?php

namespace App\Models;

use App\TypeBankOperation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankOperations extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'type',
        'amount',
        'description',
        'account_bank_id',
    ];

    protected function casts(): array
    {
        return [
            'type' => TypeBankOperation::class,
        ];
    }

    public function accountbank(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
       return $this->belongsTo(AccountBank::class);
    }
}
