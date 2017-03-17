<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Alumnos', function(Blueprint $table)
		{
			$table->integer('fi_IdCatAlumno', true);
			$table->string('fc_Nombre', 150);
			$table->string('fc_ApPaterno', 150);
			$table->string('fc_ApMaterno', 150)->nullable();
			$table->string('fc_Sexo', 1);
			$table->binary('fc_Fotogradia')->nullable();
			$table->boolean('fb_Activo');
			$table->date('fd_FecNacimiento');
			$table->string('fc_CURP', 18)->nullable();
			$table->string('fc_TipoSangre', 5)->nullable();
			$table->string('fc_FactorRH', 5)->nullable();
			$table->string('fc_CalleNumero', 50)->nullable();
			$table->string('fc_Colonia', 50)->nullable();
			$table->string('fc_CodigoPostal', 50)->nullable();
			$table->integer('fi_IdCatCiudad')->nullable()->index('fk_tblCat_Alumnos_tblCat_Ciudad1_idx');
			$table->integer('fi_IdCatEstado')->nullable()->index('fk_tblCat_Alumnos_tblCat_Estado1_idx');
			$table->string('fc_ContactoEmergencia', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_Alumnos');
	}

}
