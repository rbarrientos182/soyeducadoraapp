<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_Alumnos', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatCiudad', 'fk_tblCat_Alumnos_tblCat_Ciudad1')->references('fi_IdCatCiudad')->on('tblCat_Ciudad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCatEstado', 'fk_tblCat_Alumnos_tblCat_Estado1')->references('fi_IdCatEstado')->on('tblCat_Estado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_Alumnos', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_Alumnos_tblCat_Ciudad1');
			$table->dropForeign('fk_tblCat_Alumnos_tblCat_Estado1');
		});
	}

}
