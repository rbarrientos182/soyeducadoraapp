<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpeNotaGrupal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_NotaGrupal', function (Blueprint $table) {
          $table->increments('fi_IdOpeNotaGrupal');
          $table->string('fc_NombreAviso',50);
          $table->string('fc_Asunto',500);
          $table->dateTime('fd_FechaHora');
          $table->tinyInteger('fb_Activo');
          $table->softDeletes();
          $table->integer('fi_IdOpeUsuario')->unsigned();
          $table->integer('fi_IdCatGrupo')->unsigned();
          $table->tinyInteger('fb_EsJuntaPadres');
          $table->foreign('fi_IdOpeUsuario')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario');
          $table->foreign('fi_IdCatGrupo')->references('fi_IdCatGrupo')->on('tblCat_Grupos');
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
