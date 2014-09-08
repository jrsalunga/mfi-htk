<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReplicateFieldOnTimelogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('timelog', function($table)
		{
			$table->boolean('replicated')->after('terminalid');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('timelog', function($table)
		{
			$table->dropColumn('replicated');
		});
	}

}
