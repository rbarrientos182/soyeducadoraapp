<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatGruposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_Grupos', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatEscuela', 'fk_tblCat_Grupos_tblCat_Escuela1')->references('fi_IdCatEscuela')->on('tblCat_Escuela')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdOpeUsuario', 'fk_tblCat_Grupos_tblOpe_Usuario1')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_Grupos', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_Grupos_tblCat_Escuela1');
			$table->dropForeign('fk_tblCat_Grupos_tblOpe_Usuario1');
		});
	}

}
