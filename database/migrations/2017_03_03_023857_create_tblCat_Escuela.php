<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatEscuela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Escuela', function (Blueprint $table) {
          $table->increments('fi_IdCatEscuela');
          $table->string('fc_NombreEscuela',150);
          $table->string('fc_Clave',50)->nullable();
          $table->string('fc_CalleNumero',150)->nullable();
          $table->string('fc_Colonia',150)->nullable();
          $table->softDeletes();
          $table->integer('fi_IdCatCiudad')->unsigned();
          $table->integer('fi_IdCatEstado')->unsigned();
          $table->integer('fi_IdCatSistemaEscolar')->unsigned();
          $table->integer('fi_IdCatZonaEscolar')->unsigned();
          $table->integer('fi_IdOpeUsuario')->unsigned();
          $table->time('fd_HoraEntrada')->nullable();
          $table->time('fd_HoraSalida')->nullable();
          $table->foreign('fi_IdCatCiudad')->references('fi_IdCatCiudad')->on('tblCat_Ciudad');
          $table->foreign('fi_IdCatEstado')->references('fi_IdCatEstado')->on('tblCat_Estado');
          $table->foreign('fi_IdCatSistemaEscolar')->references('fi_IdCatSistemaEscolar')->on('tblCat_SistemaEscolar');
          $table->foreign('fi_IdCatZonaEscolar')->references('fi_IdCatZonaEscolar')->on('tblCat_ZonaEscolar');
          $table->foreign('fi_IdOpeUsuario')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario');
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
