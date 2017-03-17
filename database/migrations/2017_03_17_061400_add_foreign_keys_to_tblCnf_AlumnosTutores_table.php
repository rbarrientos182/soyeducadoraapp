<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfAlumnosTutoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_AlumnosTutores', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatAlumno', 'fk_tblCnf_AlumnosTutores_tblCat_Alumnos1')->references('fi_IdCatAlumno')->on('tblCat_Alumnos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCatTutores', 'fk_tblCnf_AlumnosTutores_tblCat_Tutores1')->references('fi_IdCatTutores')->on('tblCat_Tutores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_AlumnosTutores', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_AlumnosTutores_tblCat_Alumnos1');
			$table->dropForeign('fk_tblCnf_AlumnosTutores_tblCat_Tutores1');
		});
	}

}
