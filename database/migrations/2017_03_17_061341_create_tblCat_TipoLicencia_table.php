<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatTipoLicenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_TipoLicencia', function(Blueprint $table)
		{
			$table->integer('fi_IdCatTipoLicencia', true);
			$table->string('fc_NombreLicencia', 50);
			$table->boolean('fb_Activo');
			$table->integer('fi_DescargasDisponibles');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_TipoLicencia');
	}

}
