<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatZonaEscolar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_ZonaEscolar', function (Blueprint $table) {
          $table->increments('fi_IdCnfAlumnosTutores');
          $table->string('fc_NombreZonaEscolar',150);
          $table->tinyInteger('fb_Activo');
          $table->softDeletes();
          $table->integer('fi_IdCatSectorEscolar')->unsigned();
          $table->foreign('fi_IdCatTfi_IdCatSectorEscolarutores')->references('fi_IdCatSectorEscolar')->on('tblCat_SectorEscolar');
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
