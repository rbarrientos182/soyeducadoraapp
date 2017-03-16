<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatEvaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Evaluacion', function (Blueprint $table) {
          $table->increments('fi_IdCatEvaluacion');
          $table->integer('fi_NumeroPregunta');
          $table->string('fc_Pregunta',150);
          $table->softDeletes();
          $table->integer('fi_IdCatPlaneacion')->unsigned();
          $table->foreign('fi_IdCatPlaneacion')->references('fi_IdCatPlaneacion')->on('tblCat_Planeacion');
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
