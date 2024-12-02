<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OurServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('our_services')->insert([
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'title'=>'Our Services Title',
                'description'=>'Your Services Description',
                'image'=>rand(1111,9999).'.jpg'
            ],
        ]);
    }
}
