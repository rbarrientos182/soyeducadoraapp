<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfTelefonoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_TelefonoUsuario', function (Blueprint $table) {
          $table->increments('fi_IdCnfTelefonoUsuario');
          $table->softDeletes();
          $table->integer('fi_IdOpeUsuario')->unsigned();
          $table->integer('fi_IdCatTelefono')->unsigned();
          $table->foreign('fi_IdOpeUsuario')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario');
          $table->foreign('fi_IdCatTelefono')->references('fi_IdCatTelefono')->on('tblCat_Telefono');
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
