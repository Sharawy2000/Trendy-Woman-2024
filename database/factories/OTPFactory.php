<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OTP>
 */
class OTPFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'model_id'=>1,
            'model_type'=>'App/Models/User',
            'type'=>'Password',
            'code'=>rand(11111,99999),
        ];
    }
}
