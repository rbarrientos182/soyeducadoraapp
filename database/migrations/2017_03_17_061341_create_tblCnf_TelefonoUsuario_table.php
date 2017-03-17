<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfTelefonoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_TelefonoUsuario', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfTelefonoUsuario', true);
			$table->integer('fi_IdOpeUsuario')->index('fk_tblCnf_TelefonoUsuario_tblOpe_Usuario1_idx');
			$table->integer('fi_IdCatTelefono')->index('fk_tblCnf_TelefonoUsuario_tblCat_Telefono1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_TelefonoUsuario');
	}

}
