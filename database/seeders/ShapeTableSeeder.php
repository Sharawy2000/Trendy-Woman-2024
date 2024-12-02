<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShapeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shapes')->insert([
            [
                'name' => 'Apple',
                'image' => rand(1111,9999).'.jpg'
            ],
            [
                'name' => 'Apple',
                'image' => rand(1111,9999).'.jpg'
            ],
            [
                'name' => 'Apple',
                'image' => rand(1111,9999).'.jpg'
            ],
            [
                'name' => 'Apple',
                'image' => rand(1111,9999).'.jpg'
            ],
            [
                'name' => 'Apple',
                'image' => rand(1111,9999).'.jpg'
            ],
            [
                'name' => 'Apple',
                'image' => rand(1111,9999).'.jpg'
            ],
        ]);
    }
}
