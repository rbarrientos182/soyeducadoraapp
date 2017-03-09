<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatGrupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Grupos', function (Blueprint $table) {
          $table->increments('fi_IdCatGrupo');
          $table->string('fc_Grado',50);
          $table->string('fc_Grupo',50);
          $table->tinyInteger('fb_Activo');
          $table->string('fc_CicloEscolar',45);
          $table->softDeletes();
          $table->integer('fi_IdOpeUsuario')->unsigned();
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
