<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpeConductaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_Conducta', function(Blueprint $table)
		{
			$table->integer('fi_IdOpeConducta', true);
			$table->dateTime('fd_Fecha');
			$table->integer('fi_IdOpeUsuario')->index('fk_tblOpe_Conducta_tblOpe_Usuario1_idx');
			$table->integer('fi_IdCnfConducta')->index('fk_tblOpe_Conducta_tblCnfConducta1_idx');
			$table->integer('fi_IdCnfAlumnoGrupo')->index('fk_tblOpe_Conducta_tblCnf_AlumnoGrupo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_Conducta');
	}

}
