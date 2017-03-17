<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatEscuelaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_Escuela', function(Blueprint $table)
		{
			$table->foreign('fi_IdOpeUsuario', 'fk_tblCat_Escuela_tblOpe_Usuario1')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_Escuela', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_Escuela_tblOpe_Usuario1');
		});
	}

}
