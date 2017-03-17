<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatSectorEscolarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_SectorEscolar', function(Blueprint $table)
		{
			$table->integer('fi_IdCatSectorEscolar', true);
			$table->string('fc_NombreSector', 45);
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
		Schema::drop('tblCat_SectorEscolar');
	}

}
