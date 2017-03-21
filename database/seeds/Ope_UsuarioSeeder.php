<?php

use Illuminate\Database\Seeder;
use SoyEducadora\Models\Ope_usuario;


class Ope_UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Ope_Usuario::create([
          'fi_IdCatPerfil' => 1,
          'fc_Nombre' => 'Roberto Alfonso',
          'fc_ApPaterno' => 'Barrientos',
          'fc_ApMaterno' => 'Balbuena',
          'fc_Sexo' => 'H',
          'fc_correo' => 'barrientos.isc@gmail.com',
          'fc_PassWord' => bcrypt('secret'),
      ]);
    }
}
