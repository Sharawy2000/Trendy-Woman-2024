<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('phone');
			$table->string('email');
			$table->string('password');
			$table->boolean('is_blocked')->default(false);
			$table->boolean('is_active')->default(false);
			$table->string('image')->nullable();
			$table->timestamps();
			$table->datetime('deleted_at');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}