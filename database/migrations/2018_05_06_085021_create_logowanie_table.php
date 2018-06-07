<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogowanieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logowanie', function(Blueprint $table)
		{
			$table->increments('idLogowanie');
			$table->string('login', 45);
			$table->string('Haslo', 75);
			$table->boolean('aktywne')->nullable();
			$table->integer('Administratorzy_idAdministratorzy')->nullable()->index('fk_log_administratorzy');
			$table->integer('Kierowcy_idKierowcy')->nullable()->index('fk_log_kierowcy');
			$table->integer('Kierownicy_idKierownicy')->nullable()->index('fk_log_kierownicy');
			$table->integer('Uprawnienia_idUprawnienia')->index('fk_log_uprawnienia');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logowanie');
	}

}
