<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatContextoPropioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_ContextoPropio', function(Blueprint $table)
		{
			$table->integer('fi_IdCatContextoPropio', true);
			$table->string('fc_Contexto', 500);
			$table->integer('fi_IdOpePlaneacionUsuario')->index('fk_tblCat_Contexto_tblOpe_PlaneacionUsuario1_idx');
			$table->integer('fi_IdCatGrupo')->index('fk_tblCat_Contexto_tblCat_Grupos1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_ContextoPropio');
	}

}
