@extends('layout')

@section('title',"Usuarios")
@section('content')
	<h1>{{ $title }}</h1>

	<ul>
		@forelse ($users as $user)
            <li>
			{{$user->name}} ,({{$user->email}})
			<a href="{{ route('users.show', ['id' => $user]) }}">Ver Detalles</a>
		</li>

		@empty
			<li>No hay usuario registrados.

            </li>
		@endforelse
	</ul>
@endsection
