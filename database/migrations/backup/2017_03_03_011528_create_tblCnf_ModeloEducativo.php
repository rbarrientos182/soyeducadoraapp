<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfModeloEducativo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_ModeloEducativo', function (Blueprint $table) {
          $table->increments('fi_IdCnfModeloEducativo');
          $table->string('fc_ModeloEducativo',150);
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
