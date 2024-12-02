<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderImagesTable extends Migration {

	public function up()
	{
		Schema::create('order_images', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->string('image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('order_images');
	}
}