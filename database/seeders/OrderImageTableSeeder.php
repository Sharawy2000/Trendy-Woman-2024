<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_images')->insert([
            [
                'order_id' =>1,
                'image'=>rand(1111,9999).".jpg"
            ],
            [
                'order_id' =>1,
                'image'=>rand(1111,9999).".jpg"
            ],
            [
                'order_id' =>1,
                'image'=>rand(1111,9999).".jpg"
            ],
            [
                'order_id' =>1,
                'image'=>rand(1111,9999).".jpg"
            ],
            [
                'order_id' =>1,
                'image'=>rand(1111,9999).".jpg"
            ],
            [
                'order_id' =>1,
                'image'=>rand(1111,9999).".jpg"
            ],
            [
                'order_id' =>1,
                'image'=>rand(1111,9999).".jpg"
            ],
            [
                'order_id' =>1,
                'image'=>rand(1111,9999).".jpg"
            ],
        ]);
    }
}
