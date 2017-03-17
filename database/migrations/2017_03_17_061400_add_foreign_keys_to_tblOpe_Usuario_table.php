<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblOpeUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblOpe_Usuario', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatPerfil', 'fk_tblOpe_Usuario_tblCat_Perfil1')->references('fi_IdCatPerfil')->on('tblCat_Perfil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblOpe_Usuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblOpe_Usuario_tblCat_Perfil1');
		});
	}

}
