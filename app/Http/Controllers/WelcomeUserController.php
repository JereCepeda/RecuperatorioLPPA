<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
	public function conNick($name,$nickname){
		$name = ucfirst($name);
		return "Hola, {$name}, tu apodo es {$nickname}";
	}
	public function sinNick($name){
		$name = ucfirst($name);
		return "Hola, {$name} Bienvenido!";
	}

}
