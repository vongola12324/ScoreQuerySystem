<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->string('name', 20);
            $table->string('nickname', 20);
            $table->string('job', 20);
            $table->string('group', 20);
            $table->string('confirm_code', 64);
            $table->timestamp('confirm_at')->nullable();
            $table->string('register_ip', 40);
            $table->timestamp('register_at')->nullable();
            $table->string('lastlogin_ip', 40);
            $table->timestamp('lastlogin_at')->nullable();
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
		Schema::drop('admins');
	}

}
