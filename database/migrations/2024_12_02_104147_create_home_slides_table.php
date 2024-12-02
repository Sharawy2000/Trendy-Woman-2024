<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHomeSlidesTable extends Migration {

	public function up()
	{
		Schema::create('home_slides', function(Blueprint $table) {
			$table->increments('id');
			$table->string('image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('home_slides');
	}
}