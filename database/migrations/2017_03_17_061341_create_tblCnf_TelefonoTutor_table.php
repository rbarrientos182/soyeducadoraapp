<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCnfTelefonoTutorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCnf_TelefonoTutor', function(Blueprint $table)
		{
			$table->integer('fi_IdCnfTelefonoTutor', true);
			$table->integer('fi_IdCatTelefono')->index('fk_tblCnf_TelefonoTutor_tblCat_Telefono1_idx');
			$table->integer('fi_IdCatTutores')->index('fk_tblCnf_TelefonoTutor_tblCat_Tutores1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblCnf_TelefonoTutor');
	}

}
