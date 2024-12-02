<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'key'=>'App',
                'value'=>'X app',
            ],
            [
                'key'=>'App',
                'value'=>'X app',
            ],
            [
                'key'=>'App',
                'value'=>'X app',
            ],
            [
                'key'=>'App',
                'value'=>'X app',
            ],
            [
                'key'=>'App',
                'value'=>'X app',
            ],
            [
                'key'=>'App',
                'value'=>'X app',
            ],
            [
                'key'=>'App',
                'value'=>'X app',
            ],
        ]);
    }
}
