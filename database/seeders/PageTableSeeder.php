<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [
                'title' => fake()->title(),
                'slug' => "Home",
                'content' => fake()->text(),
            ],
            [
                'title' => fake()->title(),
                'slug' => "About",
                'content' => fake()->text(),
            ],
            [
                'title' => fake()->title(),
                'slug' => "contct-us",
                'content' => fake()->text(),
            ],
            [
                'title' => fake()->title(),
                'slug' => "our-services",
                'content' => fake()->text(),
            ],
            [
                'title' => fake()->title(),
                'slug' => "FAQ",
                'content' => fake()->text(),
            ],
            [
                'title' => fake()->title(),
                'slug' => "partners",
                'content' => fake()->text(),
            ],
        ]);
    }
}
