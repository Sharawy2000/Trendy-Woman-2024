<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert([
            [
                'email' => 'email1@example.com',
            ],
            [
                'email' => 'email2@example.com',
            ],
            [
                'email' => 'email3@example.com',
            ],
            [
                'email' => 'email4@example.com',
            ],
            [
                'email' => 'email6@example.com',
            ],
            [
                'email' => 'email7@example.com',
            ],
            [
                'email' => 'email8@example.com',
            ],
        ]);
    }
}
