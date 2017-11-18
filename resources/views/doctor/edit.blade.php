@extends('layouts.admin')

@section('content')

	<form action="{{ route('doctor.update', $doctor->id) }}" method="POST">
		<input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        
        @include('doctor.form')

	</form>

@stop