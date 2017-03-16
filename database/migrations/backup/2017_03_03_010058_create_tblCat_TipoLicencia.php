<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatTipoLicencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCat_TipoLicencia', function (Blueprint $table) {
            $table->increments('fi_IdCatTipoLicencia');
            $table->string('fc_NombreLicencia',50);
            $table->tinyInteger('fb_Activo');
            $table->integer('fi_DescargasDisponibles');
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
