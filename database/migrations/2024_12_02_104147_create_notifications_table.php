<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationsTable extends Migration {

	public function up()
	{
		Schema::create('notifications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('title');
			$table->mediumText('description');
			$table->boolean('is_seen');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('notifications');
	}
}