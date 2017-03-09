<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatContextoPropio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_ContextoPropio', function (Blueprint $table) {
          $table->increments('fi_IdCatContextoPropio');
          $table->string('fc_Contexto',500);
          $table->tinyInteger('fb_Asistio');
          $table->softDeletes();
          $table->integer('fi_IdOpePlaneacionUsuario')->unsigned();
          $table->integer('fi_IdCatGrupo')->unsigned();
          $table->foreign('fi_IdOpePlaneacionUsuario')->references('fi_IdOpePlaneacionUsuario')->on('tblOpe_PlaneacionUsuario');
          $table->foreign('fi_IdCatGrupo')->references('fi_IdCatGrupo')->on('tblCat_Grupos');
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
