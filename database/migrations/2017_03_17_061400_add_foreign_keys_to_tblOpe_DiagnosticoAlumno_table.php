<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblOpeDiagnosticoAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblOpe_DiagnosticoAlumno', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatDiagnostico', 'fk_tblOpe_DiagnosticoAlumno_tblCat_Diagnostico1')->references('fi_IdCatDiagnostico')->on('tblCat_Diagnostico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCatDiagnosticoPropio', 'fk_tblOpe_DiagnosticoAlumno_tblCat_DiagnosticoPropio1')->references('fi_IdCatDiagnosticoPropio')->on('tblCat_DiagnosticoPropio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCnfAlumnoGrupo', 'fk_tblOpe_DiagnosticoAlumno_tblCnf_AlumnoGrupo1')->references('fi_IdCnfAlumnoGrupo')->on('tblCnf_AlumnoGrupo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblOpe_DiagnosticoAlumno', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblOpe_DiagnosticoAlumno_tblCat_Diagnostico1');
			$table->dropForeign('fk_tblOpe_DiagnosticoAlumno_tblCat_DiagnosticoPropio1');
			$table->dropForeign('fk_tblOpe_DiagnosticoAlumno_tblCnf_AlumnoGrupo1');
		});
	}

}
