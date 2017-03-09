<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpeConducta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_Conducta', function (Blueprint $table) {
          $table->increments('fi_IdOpeConducta');
          $table->date('fd_Fecha');
          $table->softDeletes();
          $table->integer('fi_IdOpeUsuario')->unsigned();
          $table->integer('fi_IdCnfConducta')->unsigned();
          $table->integer('fi_IdCnfAlumnoGrupo')->unsigned();
          $table->foreign('fi_IdOpeUsuario')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario');
          $table->foreign('fi_IdCnfConducta')->references('fi_IdCnfConducta')->on('tblCnfConducta');
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
