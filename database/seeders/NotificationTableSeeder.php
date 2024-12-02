<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifications')->insert([
            [
                'user_id' => 1,
                'title' => 'Notification Title',
                'description' => 'Notification Description',
                'is_seen'=>array_rand([true,false]),

            ],
            [
                'user_id' => 1,
                'title' => 'Notification Title',
                'description' => 'Notification Description',
                'is_seen'=>array_rand([true,false]),

            ],
            [
                'user_id' => 1,
                'title' => 'Notification Title',
                'description' => 'Notification Description',
                'is_seen'=>array_rand([true,false]),

            ],
            [
                'user_id' => 1,
                'title' => 'Notification Title',
                'description' => 'Notification Description',
                'is_seen'=>array_rand([true,false]),

            ],
            [
                'user_id' => 1,
                'title' => 'Notification Title',
                'description' => 'Notification Description',
                'is_seen'=>array_rand([true,false]),

            ],
        ]);
    }
}
