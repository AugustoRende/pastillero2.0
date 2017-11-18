@extends('layouts.admin')

@section('content')
	
	<form action="{{ route('sku_product.store') }}" method="POST">
		{{ csrf_field() }}

		@include('sku_product.form')

	</form>

@stop