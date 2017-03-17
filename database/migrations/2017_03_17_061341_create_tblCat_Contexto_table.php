<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatContextoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Contexto', function(Blueprint $table)
		{
			$table->integer('fi_IdCat_Contexto', true);
			$table->string('fc_Contexto', 500);
			$table->integer('fi_IdCatPlaneacion')->index('fk_tblCat_Contexto_tblCat_Planeacion1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_Contexto');
	}

}
