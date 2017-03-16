<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfCompetencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_Competencia', function (Blueprint $table) {
          $table->increments('fi_IdCnfCompetencia');
          $table->string('fc_Competencia',150);
          $table->tinyInteger('fb_Activo');
          $table->softDeletes();
          $table->integer('fi_IdCnfCampoFormativo')->unsigned();
          $table->foreign('fi_IdCnfCampoFormativo')->references('fi_IdCnfCampoFormativo')->on('tblCnf_CampoFormativo');
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
