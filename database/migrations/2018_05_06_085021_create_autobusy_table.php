<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutobusyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autobusy', function(Blueprint $table)
		{
			$table->increments('idAutobusy');
			$table->string('Marka', 45);
			$table->string('Nr_rejestracyjny', 10);
			$table->date('Przeglad');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('autobusy');
	}

}
