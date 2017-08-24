@extends('layouts.admin')

@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{Session::get('message')}}
	</div>
@endif

@section('content')

<h1>INDEX</h1>
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
				<a class="btn btn-sm btn-secondary" href="{{ route('user.edit', $user->id) }}">Editar</a>
              	<form action="{{ route('user.destroy', $user->id) }}" method="POST">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Borrar</button>
	            </form>
			</th>
		</tbody>
		@endforeach
	</table>





@stop