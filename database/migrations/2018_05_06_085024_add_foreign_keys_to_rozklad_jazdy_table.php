<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRozkladJazdyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rozklad_jazdy', function(Blueprint $table)
		{
			$table->foreign('Trasa_idTrasa', 'fk_rozklad_jazdy_trasa')->references('idTrasa')->on('trasa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rozklad_jazdy', function(Blueprint $table)
		{
			$table->dropForeign('fk_rozklad_jazdy_trasa');
		});
	}

}
