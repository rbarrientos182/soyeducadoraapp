<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatSistemaEscolar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_SistemaEscolar', function (Blueprint $table) {
          $table->increments('fi_IdCnfAlumnosTutores');
          $table->string('fc_NombreSistemaEscolar',150);
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
