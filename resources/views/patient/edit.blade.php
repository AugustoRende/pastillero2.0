@extends('layouts.admin')

@section('content')

	<form action="{{ route('patient.update', $patient->id) }}" method="POST">
		<input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        
        @include('patient.form')

	</form>

@stop