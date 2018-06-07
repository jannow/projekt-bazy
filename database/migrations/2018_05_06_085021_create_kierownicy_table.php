<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKierownicyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kierownicy', function(Blueprint $table)
		{
			$table->increments('idKierownicy');
			$table->string('Imie', 45);
			$table->string('Nazwisko', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kierownicy');
	}

}
