<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOtpsTable extends Migration {

	public function up()
	{
		Schema::create('otps', function(Blueprint $table) {
			$table->increments('id');
			$table->string('phone');
			$table->string('email');
			$table->integer('model_id');
			$table->string('model_type');
			$table->enum('type', array('phone', 'password', 'activate'));
			$table->string('code')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('otps');
	}
}