<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatPerfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Perfil', function(Blueprint $table)
		{
			$table->integer('fi_IdCatPerfil', true);
			$table->string('fc_NombrePerfil', 50);
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
		Schema::drop('tblCat_Perfil');
	}

}
