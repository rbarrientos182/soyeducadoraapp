<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfCompetenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_Competencia', function(Blueprint $table)
		{
			$table->foreign('fi_IdCnfCampoFormativo', 'fk_tblCnf_Competencia_tblCnf_CampoFormativo1')->references('fi_IdCnfCampoFormativo')->on('tblCnf_CampoFormativo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_Competencia', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_Competencia_tblCnf_CampoFormativo1');
		});
	}

}
