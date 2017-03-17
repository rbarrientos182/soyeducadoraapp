<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpeNotaIndividualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_NotaIndividual', function(Blueprint $table)
		{
			$table->integer('fi_IdOpe_NotaIndividual')->primary();
			$table->string('fc_NombreAviso', 50);
			$table->string('fc_Asunto', 500);
			$table->dateTime('fd_FechaHora');
			$table->boolean('fb_Activo');
			$table->integer('fi_IdOpeUsuario')->index('fk_tblOpe_NotaIndividual_tblOpe_Usuario1_idx');
			$table->integer('fi_IdCnfAlumnoGrupo')->index('fk_tblOpe_NotaIndividual_tblCnf_AlumnoGrupo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_NotaIndividual');
	}

}
