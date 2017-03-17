<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpeAsistenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_Asistencia', function(Blueprint $table)
		{
			$table->integer('fi_IdOpeAsistencia', true);
			$table->date('fd_Fecha');
			$table->boolean('fb_Asistio');
			$table->integer('fi_IdOpeUsuario')->index('fk_tbl_OpeAsistencia_tblOpe_Usuario1_idx');
			$table->integer('fi_IdCnfAlumnoGrupo')->index('fk_tblOpe_Asistencia_tblCnf_AlumnoGrupo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_Asistencia');
	}

}
