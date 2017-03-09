<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpeUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_Usuario', function (Blueprint $table) {
          $table->increments('fi_IdOpeUsuario');
          $table->string('fc_Nombre',150);
          $table->string('fc_ApPaterno',150);
          $table->string('fc_ApMaterno',150);
          $table->softDeletes();
          $table->integer('fi_IdCatPerfil')->unsigned();
          $table->string('fc_sexo',1);
          $table->foreign('fi_IdCatPerfil')->references('fi_IdCatPerfil')->on('tblCat_Perfil');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
