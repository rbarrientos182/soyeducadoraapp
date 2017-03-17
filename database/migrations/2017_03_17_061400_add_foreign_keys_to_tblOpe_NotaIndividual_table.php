<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblOpeNotaIndividualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblOpe_NotaIndividual', function(Blueprint $table)
		{
			$table->foreign('fi_IdCnfAlumnoGrupo', 'fk_tblOpe_NotaIndividual_tblCnf_AlumnoGrupo1')->references('fi_IdCnfAlumnoGrupo')->on('tblCnf_AlumnoGrupo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdOpeUsuario', 'fk_tblOpe_NotaIndividual_tblOpe_Usuario1')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblOpe_NotaIndividual', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblOpe_NotaIndividual_tblCnf_AlumnoGrupo1');
			$table->dropForeign('fk_tblOpe_NotaIndividual_tblOpe_Usuario1');
		});
	}

}
