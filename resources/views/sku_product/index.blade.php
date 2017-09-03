@extends('layouts.admin')

@include('success')

@section('content')

	<table class="table">
		<thead>
			<th>ID</th>
			<th>Paciente</th>
			<th>Producto</th>
			<th>Código</th>
			<th>Médico</th>
			<th>Activación</th>
			<th>Acciones</th>
		</thead>
		@foreach($sku_products as $sku_product)
		<tbody>
			<th>{{$sku_product->id}}</th>
			<th>{{$sku_product->patient->username}}</th>
			<th>{{$sku_product->product->description}}</th>
			<th>{{$sku_product->code}}</th>
			<th>{{$sku_product->doctor->last_name.', '.$sku_product->doctor->name}}</th>
			<th>{{date('d/m/Y',strtotime($sku_product->created_at))}}</th>
			<th>
				<a class="btn btn-sm btn-secondary" href="{{ route('sku_product.edit', $sku_product->id) }}" style="width: 56.91px;">Editar</a>
              	<form action="{{ route('sku_product.destroy', $sku_product->id) }}" method="POST">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Borrar</button>
	            </form>
			</th>
		</tbody>
		@endforeach
	</table>

	@include('pagination', ['items' => $sku_products, 'controller' => 'sku_product'])

@stop