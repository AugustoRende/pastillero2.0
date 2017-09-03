@extends('layouts.admin')

@include('success')

@section('content')

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Matrícula</th>
			<th>APM</th>
			<th>Acciones</th>
		</thead>
		@foreach($doctors as $doctor)
		<tbody>
			<th>{{$doctor->name}}</th>
			<th>{{$doctor->last_name}}</th>
			<th>{{$doctor->email}}</th>
			<th>{{$doctor->code}}</th>
			<th>{{$doctor->apm->description}}</th>
			<th>
				<a class="btn btn-sm btn-secondary" href="{{ route('doctor.edit', $doctor->id) }}" style="width: 56.91px;">Editar</a>
              	<form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Borrar</button>
	            </form>
			</th>
		</tbody>
		@endforeach
	</table>

	@include('pagination', ['items' => $doctors, 'controller' => 'doctor'])

@stop