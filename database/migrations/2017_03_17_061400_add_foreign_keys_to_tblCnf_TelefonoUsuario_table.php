<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfTelefonoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_TelefonoUsuario', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatTelefono', 'fk_tblCnf_TelefonoUsuario_tblCat_Telefono1')->references('fi_IdCatTelefono')->on('tblCat_Telefono')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdOpeUsuario', 'fk_tblCnf_TelefonoUsuario_tblOpe_Usuario1')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_TelefonoUsuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_TelefonoUsuario_tblCat_Telefono1');
			$table->dropForeign('fk_tblCnf_TelefonoUsuario_tblOpe_Usuario1');
		});
	}

}
