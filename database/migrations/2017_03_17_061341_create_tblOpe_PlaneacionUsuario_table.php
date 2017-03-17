<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpePlaneacionUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_PlaneacionUsuario', function(Blueprint $table)
		{
			$table->integer('fi_IdOpePlaneacionUsuario', true);
			$table->dateTime('fd_FechaDesde');
			$table->dateTime('fd_FechaHasta');
			$table->boolean('fb_Finalizada');
			$table->integer('fi_IdCatPlaneacion')->index('fk_tblOpe_PlaneacionUsuario_tblCat_Planeacion1_idx');
			$table->integer('fi_IdOpeUsuario')->index('fk_tblOpe_PlaneacionUsuario_tblOpe_Usuario1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_PlaneacionUsuario');
	}

}
