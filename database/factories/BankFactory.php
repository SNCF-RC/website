<?php

namespace Database\Factories;

use App\Models\Bank;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BankFactory extends Factory
{
    protected $model = Bank::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'taux_emprunt' => $this->faker->randomFloat('2','0','1'),
            'frais_compte' => $this->faker->randomFloat('2','0','100'),
            'max_emprunt'=>$this->faker->numberBetween('0','9000000000'),
        ];
    }
}
