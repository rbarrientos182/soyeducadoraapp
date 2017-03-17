<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatEscuelaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Escuela', function(Blueprint $table)
		{
			$table->integer('fi_IdCatEscuela', true);
			$table->string('fc_NombreEscuela', 150);
			$table->string('fc_Direccion', 150);
			$table->integer('fi_IdOpeUsuario')->index('fk_tblCat_Escuela_tblOpe_Usuario1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_Escuela');
	}

}
