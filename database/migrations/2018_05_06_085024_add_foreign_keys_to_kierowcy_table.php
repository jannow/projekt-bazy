<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKierowcyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kierowcy', function(Blueprint $table)
		{
			$table->foreign('Zmiana', 'fk_zmiana')->references('idGodziny_Pracy')->on('godziny_pracy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kierowcy', function(Blueprint $table)
		{
			$table->dropForeign('fk_zmiana');
		});
	}

}
