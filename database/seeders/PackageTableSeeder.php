<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
            [
                'name' => 'Package Name',
                'description' => 'Package Description',
                'price'=>200,
            ],
        ]);
    }
}
