<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'Ahmed',
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Ahmed',
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Ahmed',
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Ahmed',
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Ahmed',
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Ahmed',
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
