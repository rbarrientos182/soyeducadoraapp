<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfCampoFormativoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_CampoFormativo', function(Blueprint $table)
		{
			$table->foreign('fi_IdCnfModeloEducativo', 'fk_tblCnf_CampoFormativo_tblCnf_ModeloEducativo1')->references('fi_IdCnfModeloEducativo')->on('tblCnf_ModeloEducativo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_CampoFormativo', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_CampoFormativo_tblCnf_ModeloEducativo1');
		});
	}

}
