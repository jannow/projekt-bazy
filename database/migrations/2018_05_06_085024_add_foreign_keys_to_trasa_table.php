<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrasaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trasa', function(Blueprint $table)
		{
			$table->foreign('Linia_idLinia', 'fk_Trasa_linia')->references('idLinia')->on('linia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trasa', function(Blueprint $table)
		{
			$table->dropForeign('fk_Trasa_linia');
		});
	}

}
