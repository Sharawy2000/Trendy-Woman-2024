<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintSuggestionsTable extends Migration {

	public function up()
	{
		Schema::create('complaint_suggestions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name');
			$table->longText('body');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('complaint_suggestions');
	}
}