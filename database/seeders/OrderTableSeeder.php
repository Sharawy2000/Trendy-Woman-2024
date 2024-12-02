<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id'=>1,
                'name'=>'Ahmed',
                'phone'=>'123',
                'age'=>'30',
                'size_id'=>1,
                'shape_id'=>1,
                'status'=>0,
                'gender'=>rand(1,17),
                'occasion'=>"Weeding",
                'occasion_date'=>'2015-1-2',
                'budget'=>2000,
                'total_price'=>200,


            ],
            [
                'user_id'=>1,
                'name'=>'Ahmed',
                'phone'=>'123',
                'age'=>'30',
                'size_id'=>1,
                'shape_id'=>1,
                'status'=>0,
                'gender'=>rand(1,17),
                'occasion'=>"Weeding",
                'occasion_date'=>'2015-1-2',
                'budget'=>2000,
                'total_price'=>200,

            ],
            [
                'user_id'=>1,
                'name'=>'Ahmed',
                'phone'=>'123',
                'age'=>'30',
                'size_id'=>1,
                'shape_id'=>1,
                'status'=>0,
                'gender'=>rand(1,17),
                'occasion'=>"Weeding",
                'occasion_date'=>'2015-1-2',
                'budget'=>2000,
                'total_price'=>200,

            ],
            [
                'user_id'=>1,
                'name'=>'Ahmed',
                'phone'=>'123',
                'age'=>'30',
                'size_id'=>1,
                'shape_id'=>1,
                'status'=>0,
                'gender'=>rand(1,17),
                'occasion'=>"Weeding",
                'occasion_date'=>'2015-1-2',
                'budget'=>2000,
                'total_price'=>200,


            ],
            [
                'user_id'=>1,
                'name'=>'Ahmed',
                'phone'=>'123',
                'age'=>'30',
                'size_id'=>1,
                'shape_id'=>1,
                'status'=>0,
                'gender'=>rand(1,17),
                'occasion'=>"Weeding",
                'occasion_date'=>'2015-1-2',
                'budget'=>2000,
                'total_price'=>200,

            ],
            [
                'user_id'=>1,
                'name'=>'Ahmed',
                'phone'=>'123',
                'age'=>'30',
                'size_id'=>1,
                'shape_id'=>1,
                'status'=>0,
                'gender'=>rand(1,17),
                'occasion'=>"Weeding",
                'occasion_date'=>'2015-1-2',
                'budget'=>2000,
                'total_price'=>200,

            ],
        ]);
    }
}
