<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	 
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
           /* $table->string('username', 16)->unique();*/
			$table->string('first_name', 64)->nullable();
			$table->string('last_name', 64)->nullable();
			$table->string('email', 64)->unique();
			$table->string('password', 64);
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
