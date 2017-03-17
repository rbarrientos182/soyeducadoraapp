<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfUsuarioPagosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_UsuarioPagos', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatTipoLicencia', 'fk_tblCnf_UsuarioPagos_tblCat_TipoLicencia1')->references('fi_IdCatTipoLicencia')->on('tblCat_TipoLicencia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdOpeUsuario', 'fk_tblCnf_UsuarioPagos_tblOpe_Usuario1')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_UsuarioPagos', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_UsuarioPagos_tblCat_TipoLicencia1');
			$table->dropForeign('fk_tblCnf_UsuarioPagos_tblOpe_Usuario1');
		});
	}

}
