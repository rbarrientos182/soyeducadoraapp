<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpeNotaIndividual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_NotaIndividual', function (Blueprint $table) {
          $table->increments('fi_IdOpe_NotaIndividual');
          $table->string('fc_NombreAviso',50);
          $table->string('fc_Asunto',500);
          $table->dateTime('fd_FechaHora');
          $table->tinyInteger('fb_Activo');
          $table->softDeletes();
          $table->integer('fi_IdOpeUsuario')->unsigned();
          $table->integer('fi_IdCnfAlumnoGrupo')->unsigned();
          $table->foreign('fi_IdOpeUsuario')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario');
          $table->foreign('fi_IdCnfAlumnoGrupo')->references('fi_IdCnfAlumnoGrupo')->on('tblCnf_AlumnoGrupo');

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
