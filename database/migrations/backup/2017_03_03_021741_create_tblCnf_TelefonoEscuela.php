<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfTelefonoEscuela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_TelefonoEscuela', function (Blueprint $table) {
          $table->increments('fi_IdCnfTelefonoEscuela');
          $table->softDeletes();
          $table->integer('fi_IdCatTelefono')->unsigned();
          $table->integer('fi_IdCatEscuela')->unsigned();
          $table->foreign('fi_IdCatTelefono')->references('fi_IdCatTelefono')->on('tblCat_Telefono');
          $table->foreign('fi_IdCatEscuela')->references('fi_IdCatEscuela')->on('tblCat_Escuela');

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
