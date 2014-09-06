<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timelog', function($table){
			$table->string('employeeid', 32);
			$table->datetime('datetime');
			$table->string('txncode', 2);
			$table->tinyInteger('entrytype');
			$table->string('terminalid', 45);
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
		Schema::drop('timelog');
	}

}
