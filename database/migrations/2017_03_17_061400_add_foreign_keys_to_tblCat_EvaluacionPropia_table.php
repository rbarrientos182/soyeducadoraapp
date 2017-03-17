<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatEvaluacionPropiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_EvaluacionPropia', function(Blueprint $table)
		{
			$table->foreign('fi_IdOpePlaneacionUsuario', 'fk_tblCat_EvaluacionPropia_tblOpe_PlaneacionUsuario1')->references('fi_IdOpePlaneacionUsuario')->on('tblOpe_PlaneacionUsuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_EvaluacionPropia', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_EvaluacionPropia_tblOpe_PlaneacionUsuario1');
		});
	}

}
