<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatEvaluacionPropia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_EvaluacionPropia', function (Blueprint $table) {
          $table->increments('fi_IdCatEvaluacionPropia');
          $table->integer('fi_NumeroPregunta');
          $table->string('fc_Pregunta',150);
          $table->softDeletes();
          $table->integer('fi_IdOpePlaneacionUsuario')->unsigned();
          $table->foreign('fi_IdOpePlaneacionUsuario')->references('fi_IdOpePlaneacionUsuario')->on('tblOpe_PlaneacionUsuario');
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
