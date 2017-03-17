<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatSistemaEscolarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_SistemaEscolar', function(Blueprint $table)
		{
			$table->integer('fi_IdCatSistemaEscolar', true);
			$table->string('fc_NombreSistemaEscolar', 150);
			$table->boolean('fb_Activo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_SistemaEscolar');
	}

}
