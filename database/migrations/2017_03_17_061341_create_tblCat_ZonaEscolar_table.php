<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatZonaEscolarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_ZonaEscolar', function(Blueprint $table)
		{
			$table->integer('fi_IdCatZonaEscolar', true);
			$table->string('fc_NombreZonaEscolar', 150);
			$table->boolean('fb_Activo');
			$table->integer('fi_IdCatSectorEscolar')->index('fk_tblCat_ZonaEscolar_tblCat_SectorEscolar1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_ZonaEscolar');
	}

}
