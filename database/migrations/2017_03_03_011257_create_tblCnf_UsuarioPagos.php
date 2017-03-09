<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfUsuarioPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCnf_UsuarioPagos', function (Blueprint $table) {
            $table->increments('fi_IdUsuarioPagos');
            $table->date('fd_FechaInicio');
            $table->date('fd_FechaFin');
            $table->integer('fi_DescargasUtilizadas');
            $table->softDeletes();
            $table->integer('fi_IdOpeUsuario')->unsigned();
            $table->integer('fi_IdCatTipoLicencia')->unsigned();
            $table->foreign('fi_IdOpeUsuario')->references('fi_IdOpeUsuario')->on('tblOpe_Usuario');
            $table->foreign('fi_IdCatTipoLicencia')->references('fi_IdCatTipoLicencia')->on('tblCat_TipoLicencia');
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
