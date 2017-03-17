<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblCnfTelefonoTutorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblCnf_TelefonoTutor', function(Blueprint $table)
		{
			$table->foreign('fi_IdCatTelefono', 'fk_tblCnf_TelefonoTutor_tblCat_Telefono1')->references('fi_IdCatTelefono')->on('tblCat_Telefono')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fi_IdCatTutores', 'fk_tblCnf_TelefonoTutor_tblCat_Tutores1')->references('fi_IdCatTutores')->on('tblCat_Tutores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCnf_TelefonoTutor', function(Blueprint $table)
		{
			$table->dropForeign('fk_tblCnf_TelefonoTutor_tblCat_Telefono1');
			$table->dropForeign('fk_tblCnf_TelefonoTutor_tblCat_Tutores1');
		});
	}

}
