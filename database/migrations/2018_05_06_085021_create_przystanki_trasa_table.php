<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrzystankiTrasaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('przystanki_trasa', function(Blueprint $table)
		{
			$table->increments('idPrzystanki_Trasa');
			$table->integer('Trasa_idTrasa')->index('fk_przystanki_trasa_tr');
			$table->integer('Przystanki_idPrzystanki')->index('fk_przystanki_trasa_prz');
			$table->time('Czas_miedzy_przystankami', 6)->nullable();
			$table->integer('Poprzedni_przystanek')->nullable()->index('fk_przystanki_trasa_prz2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('przystanki_trasa');
	}

}
