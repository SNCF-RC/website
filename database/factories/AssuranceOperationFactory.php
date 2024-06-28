<?php

namespace Database\Factories;

use App\Models\AssuranceOperation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AssuranceOperationFactory extends Factory
{
    protected $model = AssuranceOperation::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
