<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCnfOrganizacionEducativa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCnf_OrganizacionEducativa', function (Blueprint $table) {
          $table->increments('fi_IdCnfOrganizacionEducativa');
          $table->string('fc_NombreSectorEscolar',150);
          $table->string('fc_NombreZonaEscolar',150);
          $table->softDeletes();
          $table->integer('fi_IdCatPais')->unsigned();
          $table->foreign('fi_IdCatPais')->references('fi_IdCatPais')->on('tblCat_Pais');
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
