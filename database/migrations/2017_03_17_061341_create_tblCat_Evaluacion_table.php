<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatEvaluacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Evaluacion', function(Blueprint $table)
		{
			$table->integer('fi_IdCatEvaluacion', true);
			$table->integer('fi_NumeroPregunta');
			$table->string('fc_Pregunta', 150);
			$table->integer('fi_IdCatPlaneacion')->index('fk_tblCat_Evaluacion_tblCat_Planeacion1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_Evaluacion');
	}

}
