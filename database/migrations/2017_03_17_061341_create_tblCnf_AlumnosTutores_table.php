<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfAlumnosTutoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_AlumnosTutores', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfAlumnosTutores', true);
			$table->integer('fi_IdCatTutores')->index('fk_tblCnf_AlumnosTutores_tblCat_Tutores1_idx');
			$table->integer('fi_IdCatAlumno')->index('fk_tblCnf_AlumnosTutores_tblCat_Alumnos1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_AlumnosTutores');
	}

}
