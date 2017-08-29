@extends('layouts.admin')

@section('content')
	
	<h1>APM CREATE</h1>

	<form action="{{ route('apm.store') }}" method="POST">
		{{ csrf_field() }}

		@include('apm.form')

	</form>

@stop