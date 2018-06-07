<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKierowcyAutobusyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kierowcy_autobusy', function(Blueprint $table)
		{
			$table->increments('idKierowcy_Autobusy');
			$table->integer('Kierowcy_idKierowcy')->index('fk_kierowcy_autobusy_kier');
			$table->integer('Autobusy_idAutobusy')->index('fk_kierowcy_autobusy_aut');
			$table->integer('Rozklad_jazdy_idRozklad_jazdy')->index('fk_kierowcy_autobusy_rozklad');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kierowcy_autobusy');
	}

}
