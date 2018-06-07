<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutobusyLiniaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autobusy_linia', function(Blueprint $table)
		{
			$table->increments('idAutobusy_linia');
			$table->integer('Linia_idLinia')->index('fk_autobusy_linia_lini');
			$table->integer('Autobusy_idAutobusy')->index('fk_autobusy_linia_aut');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('autobusy_linia');
	}

}
