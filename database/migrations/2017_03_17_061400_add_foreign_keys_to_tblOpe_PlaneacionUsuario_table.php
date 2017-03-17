<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblOpePlaneacionUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblOpe_PlaneacionUsuario', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatPlaneacion', 'fk_tblOpe_PlaneacionUsuario_tblCat_Planeacion1')->references('fi_IdCatPlaneacion')->on('tblCat_Planeacion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdOpeUsuario', 'fk_tblOpe_PlaneacionUsuario_tblOpe_Usuario1')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblOpe_PlaneacionUsuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblOpe_PlaneacionUsuario_tblCat_Planeacion1');
			$table->dropForeign('fk_tblOpe_PlaneacionUsuario_tblOpe_Usuario1');
		});
	}

}
