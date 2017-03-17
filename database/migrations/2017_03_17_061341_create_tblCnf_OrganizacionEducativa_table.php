<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfOrganizacionEducativaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_OrganizacionEducativa', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfOrganizacionEducativa', true);
			$table->string('fc_NombreSectorEscolar', 150);
			$table->string('fc_NombreZonaEscolar', 150);
			$table->integer('fi_IdCatPais')->index('fk_tblCnf_OrganizacionEducativa_tblCat_Pais1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_OrganizacionEducativa');
	}

}
