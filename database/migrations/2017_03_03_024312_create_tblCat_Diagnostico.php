<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatDiagnostico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Diagnostico', function (Blueprint $table) {
          $table->increments('fi_IdCatDiagnostico');
          $table->integer('fi_NumeroPregunta');
          $table->string('fc_Pregunta',150);
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
