<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatTipoRecurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_TipoRecurso', function (Blueprint $table) {
          $table->increments('fi_IdCatTipoRecurso');
          $table->string('fc_TipoRecurso',150);
          $table->tinyInteger('fb_Activo');
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
