@extends('layouts.admin')

@include('success')

@section('content')
	<div class="row">
		<div class="col-md-9">
			<h3>Listado de APMs</h3>
		</div>
		<div class="col-md-3" style="text-align: right; margin-bottom: 10px;">
			<a class="btn btn-sm btn-primary" href="{{ route('apm.create') }}">
				<i class="fa fa-plus" aria-hidden="true"></i>Agregar
			</a>
		</div>
	</div>

	<table class="table">
		<thead>
			<th>Código</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</thead>
		@foreach($apms as $apm)
		<tbody>
			<td>{{$apm->code}}</td>
			<td>{{$apm->description}}</td>
			<td>
				<a class="btn btn-sm btn-secondary" href="{{ route('apm.edit', $apm->id) }}" style="width: 56.91px; float:left; margin-right: 5px;">Editar</a>
              	<form action="{{ route('apm.destroy', $apm->id) }}" method="POST" style="width: 56.91px; float:left;">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Borrar</button>
	            </form>
			</td>
		</tbody>
		@endforeach
	</table>

	@include('pagination', ['items' => $apms, 'controller' => 'apm'])

@stop