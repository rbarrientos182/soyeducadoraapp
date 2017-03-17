<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfTelefonoEscuelaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_TelefonoEscuela', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatEscuela', 'fk_tblCnf_TelefonoEscuela_tblCat_Escuela1')->references('fi_IdCatEscuela')->on('tblCat_Escuela')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCatTelefono', 'fk_tblCnf_TelefonoEscuela_tblCat_Telefono1')->references('fi_IdCatTelefono')->on('tblCat_Telefono')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_TelefonoEscuela', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_TelefonoEscuela_tblCat_Escuela1');
			$table->dropForeign('fk_tblCnf_TelefonoEscuela_tblCat_Telefono1');
		});
	}

}
