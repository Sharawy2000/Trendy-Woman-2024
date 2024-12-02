<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sizes')->insert([
            [
                'name' => 'XL'
            ],
            [
                'name' => 'XL'
            ],
            [
                'name' => 'XL'
            ],
            [
                'name' => 'XL'
            ],
            [
                'name' => 'XL'
            ],
            [
                'name' => 'XL'
            ],
        ]);
    }
}
