<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>1,
            'name'=>fake()->name(),
            'phone'=>fake()->phone(),
            'age'=>rand(10,30),
            'size_id'=>1,
            'shape_id'=>1,
            'gender'=>rand(1,16),
            'occation'=>fake()->title(),
            'occation_date'=>fake()->time(),
            'budget'=>2000,
            'status'=>1,
        ];
    }
}
