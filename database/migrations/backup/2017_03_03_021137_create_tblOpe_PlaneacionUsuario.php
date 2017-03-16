<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpePlaneacionUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_PlaneacionUsuario', function (Blueprint $table) {
          $table->increments('fi_IdOpePlaneacionUsuario');
          $table->date('fd_FechaDesde');
          $table->date('fd_FechaHasta');
          $table->tinyInteger('fb_Finalizada');
          $table->softDeletes();
          $table->integer('fi_IdCatPlaneacion')->unsigned();
          $table->integer('fi_IdOpeUsuario')->unsigned();
          $table->foreign('fi_IdCatPlaneacion')->references('fi_IdCatPlaneacion')->on('tblCat_Planeacion');
          $table->foreign('fi_IdOpeUsuario')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario');

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
