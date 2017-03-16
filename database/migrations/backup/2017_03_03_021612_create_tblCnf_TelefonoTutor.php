<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfTelefonoTutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_TelefonoTutor', function (Blueprint $table) {
          $table->increments('fi_IdCnfTelefonoTutor');
          $table->integer('fi_IdCatTelefono')->unsigned();
          $table->integer('fi_IdCatTutores')->unsigned();
          $table->softDeletes();
          $table->foreign('fi_IdCatTelefono')->references('fi_IdCatTelefono')->on('tblCat_Telefono');
          $table->foreign('fi_IdCatTutores')->references('fi_IdCatTutores')->on('tblCat_Tutores');
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
