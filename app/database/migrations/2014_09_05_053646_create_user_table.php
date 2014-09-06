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
		Schema::create('user', function($table){
			$table->string('username', 50)->unique();
			$table->string('password', 255);
			$table->string('name', 255)->nullable();
			$table->string('email', 50);
			$table->tinyInteger('admin')->nullable()->default(0);
			$table->string('id', 32)->primary();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
