@extends('layouts.admin')

@include('success')

@section('content')
	<div class="row">
		<div class="col-md-9">
			<h3>Users</h3>
		</div>
		<div class="col-md-3" style="text-align: right; margin-bottom: 10px;">
			<a class="btn btn-sm btn-primary" href="{{ route('user.create') }}">
				<i class="fa fa-plus" aria-hidden="true"></i> Add
			</a>
		</div>
	</div>

	<table class="table">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Actions</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->username}}</td>
			<td>{{$user->email}}</td>
			<td>
				<a class="btn btn-sm btn-secondary" href="{{ route('user.edit', $user->id) }}" style="width: 56.91px; float:left; margin-right: 5px;">Edit</a>
              	<form action="{{ route('user.destroy', $user->id) }}" method="POST" style="width: 56.91px; float:left; margin-right: 5px;">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Delete</button>
	            </form>
			</td>
		</tbody>
		@endforeach
	</table>

	@include('pagination', ['items' => $users, 'controller' => 'user'])

@stop