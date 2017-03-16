<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_Login', function (Blueprint $table) {
          $table->increments('fi_ldCnfLogin');
          $table->string('fc_Usuario',150);
          $table->string('fc_Password',150);
          $table->tinyInteger('fb_Activo');
          $table->softDeletes();
          $table->integer('fi_IdOpeUsuario')->unsigned();
          $table->foreign('fi_IdOpeUsuario')->references('fi_IdCatPais')->on('tblOpe_Usuario');
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
