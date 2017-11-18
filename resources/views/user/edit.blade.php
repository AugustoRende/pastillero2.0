@extends('layouts.admin')

@section('content')

	<form action="{{ route('user.update', $user->id) }}" method="POST">
		<input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        
        @include('user.form')

	</form>

@stop