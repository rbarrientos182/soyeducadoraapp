<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfCampoFormativo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_CampoFormativo', function (Blueprint $table) {
          $table->increments('fi_IdCnfCampoFormativo');
          $table->string('fc_CampoFormativo',150);
          $table->tinyInteger('fb_Activo');
          $table->softDeletes();
          $table->integer('fi_IdCnfModeloEducativo')->unsigned();
          $table->foreign('fi_IdCnfModeloEducativo')->references('fi_IdCnfModeloEducativo')->on('tblCnf_ModeloEducativo');

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
