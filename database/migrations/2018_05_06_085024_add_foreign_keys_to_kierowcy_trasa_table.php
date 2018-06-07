<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKierowcyTrasaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kierowcy_trasa', function(Blueprint $table)
		{
			$table->foreign('Kierowcy_idKierowcy', 'fk_Kierowcy')->references('idKierowcy')->on('kierowcy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Trasa_idTrasa', 'fk_Trasa')->references('idTrasa')->on('trasa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kierowcy_trasa', function(Blueprint $table)
		{
			$table->dropForeign('fk_Kierowcy');
			$table->dropForeign('fk_Trasa');
		});
	}

}
