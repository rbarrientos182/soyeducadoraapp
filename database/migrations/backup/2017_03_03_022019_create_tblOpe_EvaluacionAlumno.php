<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpeEvaluacionAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_EvaluacionAlumno', function (Blueprint $table) {
          $table->increments('fi_IdOpeEvaluacionAlumno');
          $table->integer('fi_Respuesta');
          $table->softDeletes();
          $table->integer('fi_IdCatEvaluacionPropia')->nullable()->unsigned();
          $table->integer('fi_IdCatEvaluacion')->nullable()->unsigned();
          $table->integer('fi_IdCnfAlumnoGrupo')->unsigned();
          $table->foreign('fi_IdCatEvaluacionPropia')->references('fi_IdCatEvaluacionPropia')->on('tblCat_EvaluacionPropia');
          $table->foreign('fi_IdCatEvaluacion')->references('fi_IdCatEvaluacion')->on('tblCat_Evaluacion');
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
