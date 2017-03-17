<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfTelefonoEscuelaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_TelefonoEscuela', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfTelefonoEscuela', true);
			$table->integer('fi_IdCatTelefono')->index('fk_tblCnf_TelefonoEscuela_tblCat_Telefono1_idx');
			$table->integer('fi_IdCatEscuela')->index('fk_tblCnf_TelefonoEscuela_tblCat_Escuela1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_TelefonoEscuela');
	}

}
