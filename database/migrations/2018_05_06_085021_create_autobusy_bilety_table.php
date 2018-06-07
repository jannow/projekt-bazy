<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutobusyBiletyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autobusy_bilety', function(Blueprint $table)
		{
			$table->increments('idAutobusy_Bilety');
			$table->integer('Bilety_idBilety')->index('fk_autobusy_bilety_bil');
			$table->integer('Autobusy_idAutobusy')->index('fk_autobusy_bilety_aut');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('autobusy_bilety');
	}

}
