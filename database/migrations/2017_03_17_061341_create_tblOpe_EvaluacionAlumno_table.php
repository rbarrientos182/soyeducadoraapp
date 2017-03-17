<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpeEvaluacionAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_EvaluacionAlumno', function(Blueprint $table)
		{
			$table->integer('fi_IdOpeEvaluacionAlumno', true);
			$table->integer('fi_Respuesta');
			$table->integer('fi_IdCatEvaluacionPropia')->nullable()->index('fk_tblOpe_EvaluacionAlumno_tblCat_EvaluacionPropia1_idx');
			$table->integer('fi_IdCatEvaluacion')->nullable()->index('fk_tblOpe_EvaluacionAlumno_tblCat_Evaluacion1_idx');
			$table->integer('fi_IdCnfAlumnoGrupo')->index('fk_tblOpe_EvaluacionAlumno_tblCnf_AlumnoGrupo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_EvaluacionAlumno');
	}

}
