<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCatTutoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCat_Tutores', function(Blueprint $table)
		{
			$table->integer('fi_IdCatTutores', true);
			$table->string('fc_NombreTutor', 150);
			$table->integer('fi_Edad');
			$table->string('fc_Ocupacion', 50);
			$table->string('fc_Parentesco', 50);
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
		Schema::drop('tblCat_Tutores');
	}

}
