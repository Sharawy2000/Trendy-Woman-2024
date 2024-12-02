<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('socials')->insert([
            [
                'name' => 'Social Name',
                'link' => 'Social Link',
                'image'=>'Social Image',
            ],
            [
                'name' => 'Social Name',
                'link' => 'Social Link',
                'image'=>'Social Image',
            ],
            [
                'name' => 'Social Name',
                'link' => 'Social Link',
                'image'=>'Social Image',
            ],
            [
                'name' => 'Social Name',
                'link' => 'Social Link',
                'image'=>'Social Image',
            ],
            [
                'name' => 'Social Name',
                'link' => 'Social Link',
                'image'=>'Social Image',
            ],
            [
                'name' => 'Social Name',
                'link' => 'Social Link',
                'image'=>'Social Image',
            ],
            [
                'name' => 'Social Name',
                'link' => 'Social Link',
                'image'=>'Social Image',
            ],
        ]);
    }
}
