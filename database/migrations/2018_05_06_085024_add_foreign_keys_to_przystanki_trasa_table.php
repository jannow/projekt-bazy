<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrzystankiTrasaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('przystanki_trasa', function(Blueprint $table)
		{
			$table->foreign('Przystanki_idPrzystanki', 'fk_przystanki_trasa_prz')->references('idPrzystanki')->on('przystanki')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Poprzedni_przystanek', 'fk_przystanki_trasa_prz2')->references('idPrzystanki')->on('przystanki')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Trasa_idTrasa', 'fk_przystanki_trasa_tr')->references('idTrasa')->on('trasa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('przystanki_trasa', function(Blueprint $table)
		{
			$table->dropForeign('fk_przystanki_trasa_prz');
			$table->dropForeign('fk_przystanki_trasa_prz2');
			$table->dropForeign('fk_przystanki_trasa_tr');
		});
	}

}
