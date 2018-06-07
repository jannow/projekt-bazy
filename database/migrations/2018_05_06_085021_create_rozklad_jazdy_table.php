<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRozkladJazdyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rozklad_jazdy', function(Blueprint $table)
		{
			$table->increments('idRozklad_jazdy');
			$table->time('Godzina_wyjazdu', 6);
			$table->integer('Trasa_idTrasa')->index('fk_rozklad_jazdy_trasa');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rozklad_jazdy');
	}

}
