@extends('layout')
@section('title',"Crear Usuario")

@section('content')
<h1>Crear Usuario</h1>
	@if($errors->any())
		<div class="alert alert-danger">
			<h6>'Por favor, corrige los siguientes errores:'</h6>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{	$error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action=" {{ url ('usuarios/crear') }} " method="post">
		{!! csrf_field() !!}
		<label for="name">Nombre:</label>
		<br>
		<input type="text" name='name' id='name' placeholder='Pedro Perez'value= "{{ old('name') }}"]>
		<br>
		<label for="email">Correo Electronico:</label>
		<br>
		<input type="email" name='email' id='email' placeholder='pedro@elpiter.com' value= "{{ old('email') }}">
		<br>
		<label for="password">Password:</label>
		<br>
		<input type="password" name='password' id='password' placeholder='Mayor a 6 caracteres']>
		<br>
		<br>
		<button type="submit">Crear Usuario</button>
	</form>
	<a href={{ route('users') }}>Regresar</a>
@endsection
@section('sidebar')
	<h2>Barra Lateral Personalizada! La segunda!</h2>
@endsection 