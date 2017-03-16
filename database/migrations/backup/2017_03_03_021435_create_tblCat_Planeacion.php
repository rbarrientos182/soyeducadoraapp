<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatPlaneacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Planeacion', function (Blueprint $table) {
          $table->increments('fi_IdOpePlaneacionUsuario');
          $table->string('fc_NombrePlaneacion',150);
          $table->tinyInteger('fb_Activo');
          $table->integer('fi_NumLiberacion');
          $table->string('fc_UrlArchivo',150);
          $table->softDeletes();
          $table->integer('fi_IdCnfCompetencia')->unsigned();
          $table->string('fc_UrlPortada',150);
          $table->foreign('fi_IdCnfCompetencia')->references('fi_IdCnfCompetencia')->on('tblCnf_Competencia');

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
