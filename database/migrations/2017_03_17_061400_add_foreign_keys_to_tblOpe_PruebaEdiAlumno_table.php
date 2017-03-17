<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblOpePruebaEdiAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblOpe_PruebaEdiAlumno', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatPruebaEdi', 'fk_tblOpe_PruebaEdiAlumno_tblCat_PruebaEdi1')->references('fi_IdCatPruebaEdi')->on('tblCat_PruebaEdi')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCnfAlumnoGrupo', 'fk_tblOpe_PruebaEdiAlumno_tblCnf_AlumnoGrupo1')->references('fi_IdCnfAlumnoGrupo')->on('tblCnf_AlumnoGrupo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblOpe_PruebaEdiAlumno', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblOpe_PruebaEdiAlumno_tblCat_PruebaEdi1');
			$table->dropForeign('fk_tblOpe_PruebaEdiAlumno_tblCnf_AlumnoGrupo1');
		});
	}

}
