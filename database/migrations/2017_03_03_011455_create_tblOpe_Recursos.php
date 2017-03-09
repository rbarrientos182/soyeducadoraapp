<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOpeRecursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblOpe_Recursos', function (Blueprint $table) {
          $table->increments('fi_IdOpeRecursos');
          $table->string('fc_NombreRecurso',150);
          $table->string('fc_UrlRecurso',150);
          $table->tinyInteger('fb_Activo');
          $table->softDeletes();
          $table->integer('fi_IdCatTipoRecurso')->unsigned();
          $table->foreign('fi_IdCatTipoRecurso')->references('fi_IdCatTipoRecurso')->on('tblCat_TipoRecurso');
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
