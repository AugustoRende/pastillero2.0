@extends('layouts.admin')

@section('content')
	
	<form action="{{ route('doctor.store') }}" method="POST">
		{{ csrf_field() }}

		@include('doctor.form')

	</form>

@stop