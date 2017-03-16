<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpeDiagnosticoAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_DiagnosticoAlumno', function (Blueprint $table) {
          $table->increments('fi_IdOpeDiagnosticoAlumno');
          $table->integer('fi_Respuesta');
          $table->softDeletes();
          $table->integer('fi_IdCatDiagnosticoPropio')->nullable()->unsigned();
          $table->integer('fi_IdCatDiagnostico')->nullable()->unsigned();
          $table->integer('fi_IdCnfAlumnoGrupo')->unsigned();
          $table->foreign('fi_IdCatDiagnosticoPropio')->references('fi_IdCatDiagnosticoPropio')->on('tblCat_DiagnosticoPropio');
          $table->foreign('fi_IdCatDiagnostico')->references('fi_IdCatDiagnostico')->on('tblCat_Diagnostico');
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
