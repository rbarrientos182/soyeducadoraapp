<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CatPerfilTest extends TestCase
{

    //use DatabaseMigrations;
    use WithoutMiddleware;

    public function testCatPerfilCreate()
    {
        $data = $this->getData();
        // Creamos un nuevo perfil y verificamos la respuesta
        $this->post('/cat_perfil', $data)
            ->seeJsonEquals(['created' => true]);

        $data = $this->getData(['fc_NombrePerfil' => 'Administrador']);
        // Actualizamos el perfil recien creado (id = 3)
        $this->put('/cat_perfil/1', $data)
            ->seeJsonEquals(['updated' => true]);

        // Obtenemos los datos de dicho usuario modificado
        // y verificamos que el nombre sea el correcto
        $this->get('cat_perfil/1')->seeJson(['fc_NombrePerfil' => 'Administrador']);

        // Eliminamos al usuario
        $this->delete('cat_perfil/1')->seeJson(['deleted' => true]);
    }

    public function getData($custom = array())
    {
        $data = [
            'fc_NombrePerfil'      => 'Prueba',
            'fb_Activo'     => '1'
            ];
        $data = array_merge($data, $custom);
        return $data;
    }
}
