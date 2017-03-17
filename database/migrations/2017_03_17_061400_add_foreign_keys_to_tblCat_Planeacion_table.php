<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatPlaneacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_Planeacion', function(Blueprint $table)
		{
			$table->foreign('fi_IdCnfCompetencia', 'fk_tblCat_Planeacion_tblCnf_Competencia1')->references('fi_IdCnfCompetencia')->on('tblCnf_Competencia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_Planeacion', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_Planeacion_tblCnf_Competencia1');
		});
	}

}
