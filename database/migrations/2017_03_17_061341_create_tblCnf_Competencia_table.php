<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfCompetenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_Competencia', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfCompetencia', true);
			$table->string('fc_Competencia', 150);
			$table->boolean('fb_Activo');
			$table->integer('fi_IdCnfCampoFormativo')->index('fk_tblCnf_Competencia_tblCnf_CampoFormativo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_Competencia');
	}

}
