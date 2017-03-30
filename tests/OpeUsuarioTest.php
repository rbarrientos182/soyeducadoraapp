<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OpeUsuarioTest extends TestCase
{

    use DatabaseTransactions;
    use WithoutMiddleware;

    public function testOpeusuarioCreate()
    {
        $data = $this->getData();
        // Creamos un nuevo usuario y verificamos la respuesta
        $this->post('/cat_perfil/1/ope_usuario', $data)
            ->seeJsonEquals(['created' => true]);

        $data = $this->getData(['fc_Nombre' => 'Roberto']);
        // Actualizamos al usuario recien creado (id = 1)
        $this->put('/cat_perfil/1/ope_usuario/1', $data)
            ->seeJsonEquals(['updated' => true]);

        // Obtenemos los datos de dicho usuario modificado
        // y verificamos que el nombre sea el correcto
        $this->get('/cat_perfil/1/ope_usuario/1')->seeJson(['fc_Nombre' => 'Roberto']);

        // Eliminamos al usuario
        $this->delete('/cat_perfil/1/ope_usuario/1')->seeJson(['deleted' => true]);
    }

    public function testValidationErrorOnCreateOpeUsuario()
    {
       $data = $this->getData(['fc_Nombre' => 'Roberto', 'fc_Sexo' => 'M','fc_Password' => 'ds1231sf','fc_Correo'=>'barrientos.isc@gmail.com']);
       $this->post('/cat_perfil/1/ope_usuario/',$data)->dump();
    }

    public function testNotFoundOpeUsuario()
    {
      $this->get('/cat_perfil/1/ope_usuario/10')->seeJsonEquals(['error' => 'Model not found']);
    }

    public function getData($custom = array())
    {
      $data = [
          'fc_Nombre' => 'Robertin Alfonso',
          'fc_ApPaterno' => 'Barrientos',
          'fc_ApMaterno' => 'Balbuena',
          'fc_Sexo' => 'H',
          'fc_Password' => '123456',
          'fc_Correo' => 'barrientos.isc@gmail.com',
          'fi_IdCatPerfil' => ''
          ];

        $data = array_merge($data, $custom);
        return $data;
    }
}
