<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OpeUsuarioTest extends TestCase
{

    //use DatabaseTransactions;
    use WithoutMiddleware;

    /*public function testOpeusuarioCreate()
    {
        $data = $this->getData();
        // Creamos un nuevo usuario y verificamos la respuesta
        $this->post('api/v1/cat_perfil/1/ope_usuario', $data)
            ->seeJsonEquals(['created' => true,
                             'id' => 21]);
        $data = $this->getData(['fc_Nombre' => 'Roberto']);
        // Actualizamos al usuario recien creado (id = 1)
        $this->put('api/v1/cat_perfil/1/ope_usuario/1', $data)
            ->seeJsonEquals(['updated' => true]);

        // Obtenemos los datos de dicho usuario modificado
        // y verificamos que el nombre sea el correcto
        $this->get('api/v1/cat_perfil/1/ope_usuario/1')->seeJson(['fc_Nombre' => 'Roberto']);

        // Eliminamos al usuario
        $this->delete('api/v1/cat_perfil/1/ope_usuario/1')->seeJson(['deleted' => true]);
    }*/

    /*public function testValidationErrorOnCreateOpeUsuario()
    {
       $data = $this->getData(['fc_Nombre' => '', 'fc_Sexo' => 'M','fc_Password' => 'ds1231sf','fc_Correo'=>'barrientos.isc@gmail.com']);
       $this->post('api/v1/cat_perfil/1/ope_usuario', $data)->dump();
    }

    public function testNotFoundOpeUsuario()
    {
      $this->get('api/v1/cat_perfil/1/ope_usuario/2')->seeJsonEquals(['error' => 'Model not found']);
    }*/

    public function testOpeusuarioLogin()
    {
      $login = $this->getDataLogin();
      $this->post('api/v1/ope_usuario/login', $login)->seeJsonEquals(['login' => true]);
    }
    public function getData($custom = array())
    {
      $data = [
          'fc_Nombre' => 'Cristian',
          'fc_ApPaterno' => 'Barrientos',
          'fc_ApMaterno' => 'Balbuena',
          'fc_Sexo' => 'H',
          'password' => 'secrets',
          'email' => 'barrientos_isc@hotmail.com'
          ];

        $data = array_merge($data, $custom);
        return $data;
    }

    public function getDataLogin($custom = array())
    {
      $data = [
          'email' => 'barrientos.isc@gmail.com',
          'password' => 'secrets'
          ];

        $data = array_merge($data, $custom);
        return $data;
    }
}
