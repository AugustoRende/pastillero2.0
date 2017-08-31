@extends('layouts.admin')

@section('content')

	<form action="{{ route('apm.update', $apm->id) }}" method="POST">
		<input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        
        @include('apm.form')

	</form>

@stop