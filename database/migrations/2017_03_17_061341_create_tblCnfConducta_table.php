<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfConductaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnfConducta', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfConducta', true);
			$table->string('fc_Descripcion', 100);
			$table->integer('fi_Valor');
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
		Schema::drop('tblCnfConducta');
	}

}
