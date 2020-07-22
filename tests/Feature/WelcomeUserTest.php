<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
        /** @test */ 
    function bienvenido_user_con_apodo()
    {    
        $this   ->get('saludos/jeremias/7k670') 
                ->assertStatus(200)
                ->assertSee('Hola, Jeremias, tu apodo es 7k670');
    }
    /** @test */ 
    function bienvenido_user_sin_apodo()
    {     
        $this   ->get('saludos/jeremias')
                ->assertStatus(200)
                ->assertSee('Hola, Jeremias Bienvenido!');
    }
}
