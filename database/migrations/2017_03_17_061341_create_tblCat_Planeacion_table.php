<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatPlaneacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Planeacion', function(Blueprint $table)
		{
			$table->integer('fi_IdCatPlaneacion', true);
			$table->string('fc_NombrePlaneacion', 150);
			$table->boolean('fb_Activo');
			$table->integer('fi_NumLiberacion');
			$table->string('fc_UrlArchivo', 150);
			$table->integer('fi_IdCnfCompetencia')->index('fk_tblCat_Planeacion_tblCnf_Competencia1_idx');
			$table->string('fc_UrlPortada', 150)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_Planeacion');
	}

}
