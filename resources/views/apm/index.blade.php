@extends('layouts.admin')

@include('success')

@section('content')

	<table class="table">
		<thead>
			<th>Código</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</thead>
		@foreach($apms as $apm)
		<tbody>
			<th>{{$apm->code}}</th>
			<th>{{$apm->description}}</th>
			<th>
				<a class="btn btn-sm btn-secondary" href="{{ route('apm.edit', $apm->id) }}" style="width: 56.91px;">Editar</a>
              	<form action="{{ route('apm.destroy', $apm->id) }}" method="POST">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Borrar</button>
	            </form>
			</th>
		</tbody>
		@endforeach
	</table>

	@include('pagination', ['items' => $apms, 'controller' => 'apm'])

@stop