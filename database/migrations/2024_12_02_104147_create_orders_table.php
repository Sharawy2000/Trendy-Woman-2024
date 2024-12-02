<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name');
			$table->string('phone');
			$table->smallInteger('age');
			$table->integer('size_id')->unsigned();
			$table->integer('shape_id')->unsigned();
			$table->tinyInteger('gender');
			$table->string('occasion');
			$table->datetime('occasion_date');
			$table->decimal('budget');
			$table->decimal('price')->nullable();
			$table->tinyInteger('status');
			$table->longText('cancel_reason')->nullable();
			$table->tinyInteger('rate')->nullable();
			$table->datetime('payment_date')->nullable();
			$table->decimal('added_value')->nullable();
			$table->integer('added_value_ratio')->nullable();
			$table->decimal('total_price');
			$table->integer('package_id')->unsigned()->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}