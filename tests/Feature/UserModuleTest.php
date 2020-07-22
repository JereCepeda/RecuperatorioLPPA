<?php

namespace Tests\Feature;

use App\User;
use App\Profesion;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
 
class UserModuleTest extends TestCase
{
   
    /** @test */
    function carga_la_lista_de_usuarios()
    {   
       
        factory(Profesion::class)->create([
            'title'=> 'Plomero'
            ]);

        factory(User::class)->create([
            'name' =>'Joel'
            ]);

        $this   ->get('/usuarios')
                ->assertStatus(200)
                ->assertSee('Joel')
                ->assertSee('Lista de Usuarios');
    }


    /** @test */
    function it_display_user_details()
    {
        factory(User::class)->create([
            'name' =>'Jeremias'
            ]);
        $this   ->get('/usuarios/'.$user->id)
                ->assertStatus(200)
                ->assertSee('Mostrando el detalle del usuario : 5');
    }
    /** @test */
    function crear_nuevo_usuarios()
    {
        $this   ->get('usuarios/nuevo')
                ->assertStatus(200)
                ->assertSee('Nuevo Usuario');
    }
    /** @test */
    function editar_usuarios()
    {
        $this   ->get('usuarios/5/edit')
                ->assertStatus(200)
                ->assertSee('Lista de Usuarios');
    }
}
