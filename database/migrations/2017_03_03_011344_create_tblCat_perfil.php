<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatPerfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCat_Perfil', function (Blueprint $table) {
            $table->increments('fi_IdCatPerfil');
            $table->string('fc_NombrePerfil',50);
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
