<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfOrganizacionEducativaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_OrganizacionEducativa', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatPais', 'fk_tblCnf_OrganizacionEducativa_tblCat_Pais1')->references('fi_IdCatPais')->on('tblCat_Pais')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_OrganizacionEducativa', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_OrganizacionEducativa_tblCat_Pais1');
		});
	}

}
