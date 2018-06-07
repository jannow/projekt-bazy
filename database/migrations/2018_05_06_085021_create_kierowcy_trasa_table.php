<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKierowcyTrasaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kierowcy_trasa', function(Blueprint $table)
		{
			$table->increments('idKierowcy_Trasa');
			$table->integer('Kierowcy_idKierowcy')->index('fk_Kierowcy');
			$table->integer('Trasa_idTrasa')->index('fk_Trasa');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kierowcy_trasa');
	}

}
