<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatTelefonoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Telefono', function(Blueprint $table)
		{
			$table->integer('fi_IdCatTelefono', true);
			$table->string('fc_NumTelefono', 45);
			$table->string('fc_TipoTelefono', 45);
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
		Schema::drop('tblCat_Telefono');
	}

}
