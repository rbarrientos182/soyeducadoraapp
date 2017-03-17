<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatZonaEscolarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_ZonaEscolar', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatSectorEscolar', 'fk_tblCat_ZonaEscolar_tblCat_SectorEscolar1')->references('fi_IdCatSectorEscolar')->on('tblCat_SectorEscolar')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_ZonaEscolar', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_ZonaEscolar_tblCat_SectorEscolar1');
		});
	}

}
