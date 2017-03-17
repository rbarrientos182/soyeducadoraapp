<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfCampoFormativoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_CampoFormativo', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfCampoFormativo', true);
			$table->string('fc_CampoFormativo', 150);
			$table->boolean('fb_Activo');
			$table->integer('fi_IdCnfModeloEducativo')->index('fk_tblCnf_CampoFormativo_tblCnf_ModeloEducativo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_CampoFormativo');
	}

}
