<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOurServicesTable extends Migration {

	public function up()
	{
		Schema::create('our_services', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('description');
			$table->string('image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('our_services');
	}
}