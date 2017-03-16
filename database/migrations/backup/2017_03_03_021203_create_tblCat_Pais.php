<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatPais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Pais', function (Blueprint $table) {
          $table->increments('fi_IdCatPais');
          $table->string('fc_NombrePais',50);
          $table->tinyInteger('fb_Finalizada');
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
