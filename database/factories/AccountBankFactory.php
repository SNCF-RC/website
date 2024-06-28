<?php

namespace Database\Factories;

use App\Models\AccountBank;
use App\Models\Bank;
use App\Models\BankOperations;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AccountBankFactory extends Factory
{
    protected $model = AccountBank::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'company_id' => Company::factory(),
            'bank_id' => Bank::factory(),
            'bank_operations_id' => BankOperations::factory(),
        ];
    }
}
