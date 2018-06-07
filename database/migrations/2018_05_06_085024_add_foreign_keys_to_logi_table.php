<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('logi', function(Blueprint $table)
		{
			$table->foreign('Logowanie_idLogowanie', 'fk_logi')->references('idLogowanie')->on('logowanie')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('logi', function(Blueprint $table)
		{
			$table->dropForeign('fk_logi');
		});
	}

}
