@extends('layouts.admin')

@section('content')

	<h1>USUARIO EDIT</h1>

	{{-- <form action="{{ action('UserController@store') }}" method="POST"> --}}
	<form action="{{ route('user.update', $user->id) }}" method="POST">
		<input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        
        @include('user.form')

	</form>

@stop