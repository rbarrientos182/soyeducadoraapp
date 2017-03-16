<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCatTutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblCat_Tutores', function (Blueprint $table) {
          $table->increments('fi_IdCatTutores');
          $table->string('fc_NombreTutor',150);
          $table->integer('fi_Edad');
          $table->string('fc_Ocupacion',50);
          $table->string('fc_Parentesco',50);
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
