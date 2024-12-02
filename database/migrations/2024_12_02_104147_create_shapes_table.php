<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShapesTable extends Migration {

	public function up()
	{
		Schema::create('shapes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('shapes');
	}
}