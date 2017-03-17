<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatContextoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_Contexto', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatPlaneacion', 'fk_tblCat_Contexto_tblCat_Planeacion1')->references('fi_IdCatPlaneacion')->on('tblCat_Planeacion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_Contexto', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_Contexto_tblCat_Planeacion1');
		});
	}

}
