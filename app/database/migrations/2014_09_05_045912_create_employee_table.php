<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee', function($table){
			$table->string('code', 10)->unique();
			$table->string('lastname', 30);
			$table->string('firstname', 30);
			$table->string('middlename', 30);
			$table->string('position', 30)->nullable();
			$table->decimal('rate', 10, 2)->nullable()->default(0.00); 
			$table->string('deptid', 32)->nullable();  // key MUL
			$table->string('shiftid', 32)->nullable(); // key MUL
			$table->tinyInteger('paytype')->nullable();
			$table->tinyInteger('punching', false, true)->nullable()->default(0); 
			$table->tinyInteger('processing', false, true)->default(0); 
			$table->string('address', 120)->nullable();
			$table->string('phone', 30)->nullable();
			$table->string('fax', 30)->nullable();
			$table->string('mobile', 30)->nullable();	
			$table->string('email', 120)->nullable();
			$table->date('birthday')->nullable();
			$table->string('rfid', 10);  // key MUL
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
		Schema::drop('employee');
	}

}
