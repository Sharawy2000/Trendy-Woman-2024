<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OTPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('otps')->insert([
        [
            'phone'=>"83234567",
            'email'=>"email@example.com",
            'model_id'=>1,
            'model_type'=>"User",
            'code'=>rand(1111,9999),
        ],
        [
            'phone'=>"83234567",
            'email'=>"email@example.com",
            'model_id'=>1,
            'model_type'=>"User",
            'code'=>rand(1111,9999),
        ],
        [
            'phone'=>"83234567",
            'email'=>"email@example.com",
            'model_id'=>1,
            'model_type'=>"User",
            'code'=>rand(1111,9999),
        ],
        [
            'phone'=>"83234567",
            'email'=>"email@example.com",
            'model_id'=>1,
            'model_type'=>"User",
            'code'=>rand(1111,9999),
        ],
        [
            'phone'=>"83234567",
            'email'=>"email@example.com",
            'model_id'=>1,
            'model_type'=>"User",
            'code'=>rand(1111,9999),
        ]
    
    ]);
            
    }
}
