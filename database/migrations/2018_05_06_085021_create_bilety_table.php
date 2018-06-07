<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiletyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bilety', function(Blueprint $table)
		{
			$table->increments('idBilety');
			$table->string('Rodzaj_biletu', 45);
			$table->decimal('Cena_biletu', 10, 2);
			$table->integer('Ilosc_biletow')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bilety');
	}

}
