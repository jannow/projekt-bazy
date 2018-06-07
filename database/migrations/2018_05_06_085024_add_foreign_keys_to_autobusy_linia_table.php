<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutobusyLiniaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autobusy_linia', function(Blueprint $table)
		{
			$table->foreign('Autobusy_idAutobusy', 'fk_autobusy_linia_aut')->references('idAutobusy')->on('autobusy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Linia_idLinia', 'fk_autobusy_linia_lini')->references('idLinia')->on('linia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autobusy_linia', function(Blueprint $table)
		{
			$table->dropForeign('fk_autobusy_linia_aut');
			$table->dropForeign('fk_autobusy_linia_lini');
		});
	}

}
