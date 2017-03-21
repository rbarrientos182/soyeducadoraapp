<?php

use Illuminate\Database\Seeder;
use SoyEducadora\Models\Cat_Perfil;

class Cat_PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Cat_Perfil::create([
          'fi_IdCatPerfil' => 1,
          'fc_NombrePerfil' => 'Maestro',
          'fb_Activo' => '1',
      ]);

      Cat_Perfil::create([
          'fi_IdCatPerfil' => 2,
          'fc_NombrePerfil' => 'Padre de Familia',
          'fb_Activo' => '1',
      ]);
    }
}
