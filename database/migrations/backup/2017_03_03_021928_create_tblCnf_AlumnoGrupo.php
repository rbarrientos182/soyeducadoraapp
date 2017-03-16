<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfAlumnoGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_AlumnoGrupo', function (Blueprint $table) {
          $table->increments('fi_IdCnfAlumnoGrupo');
          $table->string('fc_CicloEscolar',45);
          $table->softDeletes();
          $table->integer('fi_IdCatGrupo')->unsigned();
          $table->integer('fi_IdCatAlumno')->unsigned();
          $table->foreign('fi_IdCatGrupo')->references('fi_IdCatGrupo')->on('tblCat_Grupos');
          $table->foreign('fi_IdCatAlumno')->references('fi_IdCatAlumno')->on('tblCat_Alumnos');
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
