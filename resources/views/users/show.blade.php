@extends('layout')
@section('title',"Usuario {$user->id}")
@section('content')
	<h1>Usuario #{{$user->id}}</h1>

	<h2>Mostrando el detalle del usuario : {{$user->id}}</h2>
	<h2>Nombre del usuario : {{$user->name}}</h2>
	<h2>Correo electronico : {{$user->email}}</h2>
	<a href={{ route('users') }}>Regresar</a>
@endsection
@section('sidebar')
	<h2>Barra Lateral Personalizada! La segunda!</h2>
@endsection 