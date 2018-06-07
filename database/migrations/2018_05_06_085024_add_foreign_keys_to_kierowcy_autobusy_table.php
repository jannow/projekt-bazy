<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKierowcyAutobusyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kierowcy_autobusy', function(Blueprint $table)
		{
			$table->foreign('Autobusy_idAutobusy', 'fk_kierowcy_autobusy_aut')->references('idAutobusy')->on('autobusy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Kierowcy_idKierowcy', 'fk_kierowcy_autobusy_kier')->references('idKierowcy')->on('kierowcy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Rozklad_jazdy_idRozklad_jazdy', 'fk_kierowcy_autobusy_rozklad')->references('idRozklad_jazdy')->on('rozklad_jazdy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kierowcy_autobusy', function(Blueprint $table)
		{
			$table->dropForeign('fk_kierowcy_autobusy_aut');
			$table->dropForeign('fk_kierowcy_autobusy_kier');
			$table->dropForeign('fk_kierowcy_autobusy_rozklad');
		});
	}

}
