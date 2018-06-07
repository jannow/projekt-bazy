<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logi', function(Blueprint $table)
		{
			$table->increments('idLogi');
			$table->dateTime('Data_logowania');
			$table->integer('Logowanie_idLogowanie')->nullable()->index('fk_logi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logi');
	}

}
