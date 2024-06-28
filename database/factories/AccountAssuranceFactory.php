<?php

namespace Database\Factories;

use App\Models\AccountAssurance;
use App\Models\Assurance;
use App\Models\AssuranceOperation;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AccountAssuranceFactory extends Factory
{
    protected $model = AccountAssurance::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'company_id' => Company::factory(),
            'assurance_operation_id' => AssuranceOperation::factory(),
            'assurance_id' => Assurance::factory(),
        ];
    }
}
