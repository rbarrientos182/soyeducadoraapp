<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Alumnos', function (Blueprint $table) {
          $table->increments('fi_IdCatAlumno');
          $table->string('fc_Nombre',150);
          $table->string('fc_ApPaterno',150);
          $table->string('fc_ApMaterno',150);
          $table->integer('fi_Edad');
          $table->string('fc_Sexo',1);
          $table->string('fc_UrlFotogradia',150);
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
