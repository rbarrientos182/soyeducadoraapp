<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpePruebaEdiAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_PruebaEdiAlumno', function (Blueprint $table) {
          $table->increments('fi_IdOpePruebaEdiAlumno');
          $table->integer('fi_Respuesta');
          $table->softDeletes();
          $table->integer('fi_IdCatPruebaEdi')->unsigned();
          $table->integer('fi_IdCnfAlumnoGrupo')->unsigned();
          $table->foreign('fi_IdCatPruebaEdi')->references('fi_IdCatPruebaEdi')->on('tblCat_PruebaEdi');
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
