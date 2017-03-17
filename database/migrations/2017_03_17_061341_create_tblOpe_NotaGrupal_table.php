<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpeNotaGrupalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_NotaGrupal', function(Blueprint $table)
		{
			$table->integer('fi_IdOpeNotaGrupal', true);
			$table->string('fc_NombreAviso', 50);
			$table->string('fc_Asunto', 500);
			$table->dateTime('fd_FechaHora');
			$table->boolean('fb_Activo');
			$table->integer('fi_IdOpeUsuario')->index('fk_tblOpe_NotaGrupal_tblOpe_Usuario1_idx');
			$table->integer('fi_IdCatGrupo')->index('fk_tblOpe_NotaGrupal_tblCat_Grupos1_idx');
			$table->boolean('fb_EsJuntaPadres');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_NotaGrupal');
	}

}
