@extends('layouts.admin')

@section('content')

	<form action="{{ route('sku_product.update', $sku_product->id) }}" method="POST">
		<input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        
        @include('sku_product.form')

	</form>

@stop