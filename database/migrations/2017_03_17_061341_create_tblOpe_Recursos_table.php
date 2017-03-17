<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpeRecursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_Recursos', function(Blueprint $table)
		{
			$table->integer('fi_IdOpeRecursos', true);
			$table->string('fc_NombreRecurso', 150);
			$table->string('fc_UrlRecurso', 150);
			$table->boolean('fb_Activo');
			$table->integer('fi_IdCatTipoRecurso')->index('fk_tblOpe_Recursos_tblCat_TipoRecurso1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_Recursos');
	}

}
