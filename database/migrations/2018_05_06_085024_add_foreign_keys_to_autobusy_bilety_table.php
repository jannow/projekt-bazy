<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutobusyBiletyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autobusy_bilety', function(Blueprint $table)
		{
			$table->foreign('Autobusy_idAutobusy', 'fk_autobusy_bilety_aut')->references('idAutobusy')->on('autobusy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Bilety_idBilety', 'fk_autobusy_bilety_bil')->references('idBilety')->on('bilety')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autobusy_bilety', function(Blueprint $table)
		{
			$table->dropForeign('fk_autobusy_bilety_aut');
			$table->dropForeign('fk_autobusy_bilety_bil');
		});
	}

}
