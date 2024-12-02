<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

	public function up()
	{
		Schema::create('packages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->decimal('price');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('packages');
	}
}