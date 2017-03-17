<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblOpeEvaluacionAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblOpe_EvaluacionAlumno', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatEvaluacion', 'fk_tblOpe_EvaluacionAlumno_tblCat_Evaluacion1')->references('fi_IdCatEvaluacion')->on('tblCat_Evaluacion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCatEvaluacionPropia', 'fk_tblOpe_EvaluacionAlumno_tblCat_EvaluacionPropia1')->references('fi_IdCatEvaluacionPropia')->on('tblCat_EvaluacionPropia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCnfAlumnoGrupo', 'fk_tblOpe_EvaluacionAlumno_tblCnf_AlumnoGrupo1')->references('fi_IdCnfAlumnoGrupo')->on('tblCnf_AlumnoGrupo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblOpe_EvaluacionAlumno', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblOpe_EvaluacionAlumno_tblCat_Evaluacion1');
			$table->dropForeign('fk_tblOpe_EvaluacionAlumno_tblCat_EvaluacionPropia1');
			$table->dropForeign('fk_tblOpe_EvaluacionAlumno_tblCnf_AlumnoGrupo1');
		});
	}

}
