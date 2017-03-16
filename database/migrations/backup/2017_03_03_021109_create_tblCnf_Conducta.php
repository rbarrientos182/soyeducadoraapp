<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfConducta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnfConducta', function (Blueprint $table) {
          $table->increments('fi_IdCnfConducta');
          $table->string('fc_Descripcion',100);
          $table->integer('fi_Valor');
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
