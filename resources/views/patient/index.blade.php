@extends('layouts.admin')

@include('success')

@section('content')

	<table class="table">
		<thead>
			<th>Usuario</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Fecha de Nacimiento</th>
			<th>Patología</th>
			<th>Médico</th>
			<th>Acciones</th>
		</thead>
		@foreach($patients as $patient)
		<tbody>
			<th>{{$patient->username}}</th>
			<th>{{$patient->name}}</th>
			<th>{{$patient->last_name}}</th>
			<th>{{date('d/m/Y',strtotime($patient->birth))}}</th>
			<th>{{$patient->pathology}}</th>
			<th>{{$patient->doctor->last_name.', '.$patient->doctor->name}}</th>
			<th>
				<a class="btn btn-sm btn-secondary" href="{{ route('patient.edit', $patient->id) }}" style="width: 56.91px;">Editar</a>
              	<form action="{{ route('patient.destroy', $patient->id) }}" method="POST">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Borrar</button>
	            </form>
			</th>
		</tbody>
		@endforeach
	</table>

	@include('pagination', ['items' => $patients, 'controller' => 'patient'])

@stop