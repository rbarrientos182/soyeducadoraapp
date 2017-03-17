<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpeDiagnosticoAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_DiagnosticoAlumno', function(Blueprint $table)
		{
			$table->integer('fi_IdOpeDiagnosticoAlumno', true);
			$table->integer('fi_Respuesta');
			$table->integer('fi_IdCatDiagnosticoPropio')->nullable()->index('fk_tblOpe_DiagnosticoAlumno_tblCat_DiagnosticoPropio1_idx');
			$table->integer('fi_IdCatDiagnostico')->nullable()->index('fk_tblOpe_DiagnosticoAlumno_tblCat_Diagnostico1_idx');
			$table->integer('fi_IdCnfAlumnoGrupo')->index('fk_tblOpe_DiagnosticoAlumno_tblCnf_AlumnoGrupo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_DiagnosticoAlumno');
	}

}
