<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatContexto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Contexto', function (Blueprint $table) {
          $table->increments('fi_IdCat_Contexto');
          $table->string('fc_Contexto',500);
          $table->softDeletes();
          $table->integer('fi_IdCatPlaneacion')->unsigned();
          $table->foreign('fi_IdCatPlaneacion')->references('fi_IdCatPlaneacion')->on('tblCat_Planeacion');
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
