<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatDiagnosticoPropioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_DiagnosticoPropio', function(Blueprint $table)
		{
			$table->integer('fi_IdCatDiagnosticoPropio', true);
			$table->integer('fi_NumeroPregunta');
			$table->string('fc_Pregunta', 150);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCat_DiagnosticoPropio');
	}

}
