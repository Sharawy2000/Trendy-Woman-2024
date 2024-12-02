<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComplaintSuggestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('complaint_suggestions')->insert([
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
            [
                'user_id'=>1,
                'name'=>'ahmed',
                'body'=>'Test message for the suggestion'
            ],
        ]);
    }
}
