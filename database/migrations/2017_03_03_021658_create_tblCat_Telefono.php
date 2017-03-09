<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatTelefono extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Telefono', function (Blueprint $table) {
          $table->increments('fi_IdCatTelefono');
          $table->string('fc_NumTelefono',45);
          $table->string('fc_TipoTelefono',45);
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
