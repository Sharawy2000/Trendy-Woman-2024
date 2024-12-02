<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialsTable extends Migration {

	public function up()
	{
		Schema::create('socials', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('link');
			$table->string('image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('socials');
	}
}