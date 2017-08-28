@extends('layouts.admin')

@include('success')

@section('content')

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Acciones</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<th>{{$user->username}}</th>
			<th>{{$user->email}}</th>
			<th>
				<a class="btn btn-sm btn-secondary" href="{{ route('user.edit', $user->id) }}" style="width: 56.91px;">Editar</a>
              	<form action="{{ route('user.destroy', $user->id) }}" method="POST">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Borrar</button>
	            </form>
			</th>
		</tbody>
		@endforeach
	</table>

	@include('pagination')

@stop