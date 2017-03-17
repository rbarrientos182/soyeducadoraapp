<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatTipoRecursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_TipoRecurso', function(Blueprint $table)
		{
			$table->integer('fi_IdCatTipoRecurso', true);
			$table->string('fc_TipoRecurso', 150);
			$table->boolean('fb_Activo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_TipoRecurso');
	}

}
