@extends('layouts.admin')

@section('content')

	<h1>USUARIO CREATE</h1>

	<form action="{{ route('user.store') }}" method="POST">
		{{ csrf_field() }}

		@include('user.form')
		
		<div class="form-group {{ $errors->has('password') ? 'has-danger' :'' }}">
			<label for="">Contraseña</label>
			<input type="password" name="user[password]" class="form-control" value="" placeholder="Ingrese la contraseña"></input>
		</div>
	</form>

@stop