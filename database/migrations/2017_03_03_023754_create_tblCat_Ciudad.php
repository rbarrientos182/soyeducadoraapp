<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Ciudad', function (Blueprint $table) {
          $table->increments('fi_IdOpeEvaluacionAlumno');
          $table->string('fc_NombreCiudad',50);
          $table->softDeletes();
          $table->integer('fi_IdCatEstado')->unsigned();
          $table->foreign('fi_IdCatEstado')->references('fi_IdCatEstado')->on('tblCat_Estado');
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
