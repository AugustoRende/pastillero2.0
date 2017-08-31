@extends('layouts.admin')

@section('content')
	
	<form action="{{ route('apm.store') }}" method="POST">
		{{ csrf_field() }}

		@include('apm.form')

	</form>

@stop