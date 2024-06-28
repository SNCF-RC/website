<?php

namespace Database\Factories;

use App\Models\BankOperations;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BankOperationsFactory extends Factory
{
    protected $model = BankOperations::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'type' => $this->faker->word(),
            'ammount' => $this->faker->word(),
            'description' => $this->faker->text(),
        ];
    }
}
