<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblOpeRecursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblOpe_Recursos', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatTipoRecurso', 'fk_tblOpe_Recursos_tblCat_TipoRecurso1')->references('fi_IdCatTipoRecurso')->on('tblCat_TipoRecurso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblOpe_Recursos', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblOpe_Recursos_tblCat_TipoRecurso1');
		});
	}

}
