<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfAlumnoGrupoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_AlumnoGrupo', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatAlumno', 'fk_tblCnf_AlumnoGrupo_tblCat_Alumnos1')->references('fi_IdCatAlumno')->on('tblCat_Alumnos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCatGrupo', 'fk_tblCnf_AlumnoGrupo_tblCat_Grupos1')->references('fi_IdCatGrupo')->on('tblCat_Grupos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_AlumnoGrupo', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_AlumnoGrupo_tblCat_Alumnos1');
			$table->dropForeign('fk_tblCnf_AlumnoGrupo_tblCat_Grupos1');
		});
	}

}
