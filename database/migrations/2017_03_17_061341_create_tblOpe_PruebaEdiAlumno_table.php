<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpePruebaEdiAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_PruebaEdiAlumno', function(Blueprint $table)
		{
			$table->integer('fi_IdOpePruebaEdiAlumno', true);
			$table->integer('fi_Respuesta');
			$table->integer('fi_IdCatPruebaEdi')->index('fk_tblOpe_PruebaEdiAlumno_tblCat_PruebaEdi1_idx');
			$table->integer('fi_IdCnfAlumnoGrupo')->index('fk_tblOpe_PruebaEdiAlumno_tblCnf_AlumnoGrupo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_PruebaEdiAlumno');
	}

}
