<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGodzinyPracyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('godziny_pracy', function(Blueprint $table)
		{
			$table->increments('idGodziny_Pracy');
			$table->time('Rozpoczecie_pracy');
			$table->time('Zakonczenie_pracy');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('godziny_pracy');
	}

}
