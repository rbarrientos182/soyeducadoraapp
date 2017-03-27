<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OpeUsuarioTest extends TestCase
{

    //use DatabaseTransactions;
    use WithoutMiddleware;

    public function testOpeusuarioCreate()
    {
        $data = $this->getData();
        // Creamos un nuevo usuario y verificamos la respuesta
        $perfilid = 1;
        $this->post('/ope_usuario', [$data, $perfilid])
            ->seeJsonEquals(['created' => true]);

        $data = $this->getData(['fc_Nombre' => 'Roberto']);
        // Actualizamos al usuario recien creado (id = 1)
        $this->put('/ope_usuario/1', $data)
            ->seeJsonEquals(['updated' => true]);

        // Obtenemos los datos de dicho usuario modificado
        // y verificamos que el nombre sea el correcto
        $this->get('ope_usuario/1')->seeJson(['fc_Nombre' => 'Roberto']);

        // Eliminamos al usuario
        $this->delete('ope_usuario/1')->seeJson(['deleted' => true]);
    }

    public function getData($custom = array())
    {
        $data = [
            'fc_Nombre'      => 'Roberto Alfonso',
            'fc_ApPaterno'   => 'Barrientos',
            'fc_ApMaterno'   => 'Balbuena',
            'fc_Sexo'        => 'H',
            'fc_Correo'      => 'ponchos65@hotmail.com',
            'fc_Password'    => '12345'
            ];
        $data = array_merge($data, $custom);
        return $data;
    }
}
