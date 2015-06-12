<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contests', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->text('subject');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contests');
	}

}
