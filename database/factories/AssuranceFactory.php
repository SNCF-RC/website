<?php

namespace Database\Factories;

use App\Models\Assurance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AssuranceFactory extends Factory
{
    protected $model = Assurance::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'frais_assurance' => $this->faker->numberBetween('10', '100'),
        ];
    }
}
