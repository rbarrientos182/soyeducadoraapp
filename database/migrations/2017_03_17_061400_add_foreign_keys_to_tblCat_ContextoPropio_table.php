<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatContextoPropioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_ContextoPropio', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatGrupo', 'fk_tblCat_Contexto_tblCat_Grupos1')->references('fi_IdCatGrupo')->on('tblCat_Grupos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdOpePlaneacionUsuario', 'fk_tblCat_Contexto_tblOpe_PlaneacionUsuario1')->references('fi_IdOpePlaneacionUsuario')->on('tblOpe_PlaneacionUsuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_ContextoPropio', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_Contexto_tblCat_Grupos1');
			$table->dropForeign('fk_tblCat_Contexto_tblOpe_PlaneacionUsuario1');
		});
	}

}
