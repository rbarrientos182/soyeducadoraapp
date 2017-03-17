<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblOpeNotaGrupalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblOpe_NotaGrupal', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatGrupo', 'fk_tblOpe_NotaGrupal_tblCat_Grupos1')->references('fi_IdCatGrupo')->on('tblCat_Grupos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdOpeUsuario', 'fk_tblOpe_NotaGrupal_tblOpe_Usuario1')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblOpe_NotaGrupal', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblOpe_NotaGrupal_tblCat_Grupos1');
			$table->dropForeign('fk_tblOpe_NotaGrupal_tblOpe_Usuario1');
		});
	}

}
