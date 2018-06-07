<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogowanieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('logowanie', function(Blueprint $table)
		{
			$table->foreign('Administratorzy_idAdministratorzy', 'fk_log_administratorzy')->references('idAdministratorzy')->on('administratorzy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Kierowcy_idKierowcy', 'fk_log_kierowcy')->references('idKierowcy')->on('kierowcy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Kierownicy_idKierownicy', 'fk_log_kierownicy')->references('idKierownicy')->on('kierownicy')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Uprawnienia_idUprawnienia', 'fk_log_uprawnienia')->references('idUprawnienia')->on('uprawnienia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('logowanie', function(Blueprint $table)
		{
			$table->dropForeign('fk_log_administratorzy');
			$table->dropForeign('fk_log_kierowcy');
			$table->dropForeign('fk_log_kierownicy');
			$table->dropForeign('fk_log_uprawnienia');
		});
	}

}
