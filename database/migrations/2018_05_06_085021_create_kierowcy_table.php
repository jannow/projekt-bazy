<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKierowcyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kierowcy', function(Blueprint $table)
		{
			$table->increments('idKierowcy');
			$table->string('Imie', 45);
			$table->string('Nazwisko', 45);
			$table->integer('Zmiana')->nullable()->index('fk_zmiana');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kierowcy');
	}

}
