@extends('layouts.admin')

@section('content')
	
	<form action="{{ route('user.store') }}" method="POST">
		{{ csrf_field() }}

		@include('user.form')

	</form>

@stop