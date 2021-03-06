<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    public function prueba_muestra_usuarios()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios');
    }

    /** @test */
    public function prueba_no_muestra_usuarios()
    {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('no hay registros');
    }


    /** @test */

    function prueba_carga_detalles_usuarios(){
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando el detalle del usuario 5');

    }
    /** @test */

    function prueba_carga_crear_usuario(){
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }

    /** @test */

    function prueba_carga_saludo_nickname(){
        $this->get('/saludo/ronaldo/bully')
            ->assertStatus(200)
            ->assertSee('Bienvenido Ronaldo tu apodo es bully');
    }


    /** @test */

    function prueba_carga_saludo_no_nickname(){
        $this->get('/saludo/ronaldo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Ronaldo');
    }

    function prueba_carga_usuario_editar(){
        $this->get('/saludo/5/edit')
            ->assertStatus(200)
            ->assertSee('Usuario 5 esta editando');
    }


    
}
