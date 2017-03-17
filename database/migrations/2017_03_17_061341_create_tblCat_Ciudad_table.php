<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatCiudadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Ciudad', function(Blueprint $table)
		{
			$table->integer('fi_IdCatCiudad', true);
			$table->string('fc_NombreCiudad', 50);
			$table->integer('fi_IdCatEstado')->index('fk_tblCat_Ciudad_tblCat_Estado1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_Ciudad');
	}

}
