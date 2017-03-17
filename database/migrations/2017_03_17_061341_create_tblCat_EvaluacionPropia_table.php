<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatEvaluacionPropiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_EvaluacionPropia', function(Blueprint $table)
		{
			$table->integer('fi_IdCatEvaluacionPropia', true);
			$table->integer('fi_NumeroPregunta');
			$table->string('fc_Pregunta', 150);
			$table->integer('fi_IdOpePlaneacionUsuario')->index('fk_tblCat_EvaluacionPropia_tblOpe_PlaneacionUsuario1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_EvaluacionPropia');
	}

}
