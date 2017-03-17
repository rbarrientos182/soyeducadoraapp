<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOpeUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOpe_Usuario', function(Blueprint $table)
		{
			$table->integer('fi_IdOpeUsuario', true);
			$table->string('fc_Nombre', 150);
			$table->string('fc_ApPaterno', 150);
			$table->string('fc_ApMaterno', 150)->nullable();
			$table->integer('fi_IdCatPerfil')->index('fk_tblOpe_Usuario_tblCat_Perfil1_idx');
			$table->string('fc_Sexo', 1);
			$table->string('fc_Password', 150)->nullable();
			$table->string('fc_Correo', 45)->nullable();
			$table->boolean('fb_UsuarioLocal')->nullable();
			$table->integer('fi_IdUsuarioFacebook')->nullable();
			$table->string('fc_UserName', 45)->nullable();
			$table->string('fc_UrlImagen', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblOpe_Usuario');
	}

}
