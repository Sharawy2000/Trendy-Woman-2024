<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert([
            [
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'image'=>rand(1111,9999).'.jpg'
            ],
            [
                'image'=>rand(1111,9999).'.jpg'
            ],
        ]);
    }
}
