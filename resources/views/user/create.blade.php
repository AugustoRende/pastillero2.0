@extends('layouts.admin')

@section('content')
	
	<h1>USUARIO CREATE</h1>

	<form action="{{ route('user.store') }}" method="POST">
		{{ csrf_field() }}

		@include('user.form')

	</form>

@stop