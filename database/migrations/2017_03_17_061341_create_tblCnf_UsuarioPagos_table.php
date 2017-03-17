<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfUsuarioPagosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_UsuarioPagos', function(Blueprint $table)
		{
			$table->integer('fi_IdUsuarioPagos', true);
			$table->date('fd_FechaInicio');
			$table->date('fd_FechaFin');
			$table->integer('fi_DescargasUtilizadas');
			$table->integer('fi_IdOpeUsuario')->index('fk_tblCnf_UsuarioPagos_tblOpe_Usuario1_idx');
			$table->integer('fi_IdCatTipoLicencia')->index('fk_tblCnf_UsuarioPagos_tblCat_TipoLicencia1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_UsuarioPagos');
	}

}
