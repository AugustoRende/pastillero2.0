@extends('layouts.admin')

@section('content')
	
	<form action="{{ route('patient.store') }}" method="POST">
		{{ csrf_field() }}

		@include('patient.form')

	</form>

@stop