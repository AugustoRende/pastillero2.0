@extends('layouts.admin')

@include('success')

@section('content')
	<div class="row">
		<div class="col-md-9">
			<h3>Listado de Médicos</h3>
		</div>
		<div class="col-md-3" style="text-align: right; margin-bottom: 10px;">
			<a class="btn btn-sm btn-primary" href="{{ route('doctor.create') }}">
				<i class="fa fa-plus" aria-hidden="true"></i>Agregar
			</a>
		</div>
	</div>

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
			<td>{{$doctor->name}}</td>
			<td>{{$doctor->last_name}}</td>
			<td>{{$doctor->email}}</td>
			<td>{{$doctor->code}}</td>
			<td>{{$doctor->apm->description}}</td>
			<td>
				<a class="btn btn-sm btn-secondary" href="{{ route('doctor.edit', $doctor->id) }}" style="width: 56.91px; float:left; margin-right: 5px;">Editar</a>
              	<form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST" style="width: 56.91px; float:left;">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Borrar</button>
	            </form>
			</td>
		</tbody>
		@endforeach
	</table>

	@include('pagination', ['items' => $doctors, 'controller' => 'doctor'])

@stop