<?php

namespace App\Models;

use App\TypeBankOperation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountBank extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'company_id',
        'bank_id',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }

    public function bankOperations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(BankOperations::class);
    }

    public function getmoney()
    {

        $bankoperations = $this->bankOperations()->get();
        $money = 0;
        foreach ($bankoperations as $bankoperation) {
            if ($bankoperation->type == TypeBankOperation::virement) {
                $money += $bankoperation->amount;
            }else if ($bankoperation->type == TypeBankOperation::debit){
                $money -= $bankoperation->amount;
            }
        }
        if ($money < 0) {
            return " - " . implode(" ",array_reverse(str_split(strrev(strval(abs($money))),3)));
        }else {
            return implode(" ",array_reverse(str_split(strrev(strval($money)),3)));
        }
    }


}
