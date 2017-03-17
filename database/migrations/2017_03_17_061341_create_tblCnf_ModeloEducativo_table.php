<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfModeloEducativoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_ModeloEducativo', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfModeloEducativo', true);
			$table->string('fc_ModeloEducativo', 150);
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
		Schema::drop('tblCnf_ModeloEducativo');
	}

}
