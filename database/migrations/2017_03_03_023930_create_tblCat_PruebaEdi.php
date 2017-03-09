<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatPruebaEdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_PruebaEdi', function (Blueprint $table) {
          $table->increments('fi_IdCatPruebaEdi');
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
