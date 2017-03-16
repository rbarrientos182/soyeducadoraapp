<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfAlumnosTutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_AlumnosTutores', function (Blueprint $table) {
          $table->increments('fi_IdCnfAlumnosTutores');
          $table->softDeletes();
          $table->integer('fi_IdCatTutores')->unsigned();
          $table->integer('fi_IdCatAlumno')->unsigned();
          $table->foreign('fi_IdCatTutores')->references('fi_IdCatTutores')->on('tblCat_Tutores');
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
