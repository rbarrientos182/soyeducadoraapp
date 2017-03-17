<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCatCiudadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCat_Ciudad', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatEstado', 'fk_tblCat_Ciudad_tblCat_Estado1')->references('fi_IdCatEstado')->on('tblCat_Estado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCat_Ciudad', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCat_Ciudad_tblCat_Estado1');
		});
	}

}
