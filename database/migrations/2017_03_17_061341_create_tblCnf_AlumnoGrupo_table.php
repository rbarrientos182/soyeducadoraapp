<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfAlumnoGrupoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_AlumnoGrupo', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfAlumnoGrupo', true);
			$table->string('fc_CicloEscolar', 45);
			$table->integer('fi_IdCatGrupo')->index('fk_tblCnf_AlumnoGrupo_tblCat_Grupos1_idx');
			$table->integer('fi_IdCatAlumno')->index('fk_tblCnf_AlumnoGrupo_tblCat_Alumnos1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_AlumnoGrupo');
	}

}
