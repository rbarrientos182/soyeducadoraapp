<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatGruposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Grupos', function(Blueprint $table)
		{
			$table->integer('fi_IdCatGrupo', true);
			$table->string('fc_Grado', 50);
			$table->string('fc_Grupo', 50);
			$table->boolean('fb_Activo');
			$table->string('fc_CicloEscolar', 45);
			$table->integer('fi_IdOpeUsuario')->index('fk_tblCat_Grupos_tblOpe_Usuario1_idx');
			$table->integer('fi_IdCatEscuela')->index('fk_tblCat_Grupos_tblCat_Escuela1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_Grupos');
	}

}
