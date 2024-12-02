<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatsTable extends Migration {

	public function up()
	{
		Schema::create('chats', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('admin_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('chats');
	}
}