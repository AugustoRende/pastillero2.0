@extends('layouts.admin')

@include('success')

@section('content')
	<div class="row">
		<div class="col-md-9">
			<h3>Patients</h3>
		</div>
		<div class="col-md-3" style="text-align: right; margin-bottom: 10px;">
			<a class="btn btn-sm btn-primary" href="{{ route('patient.create') }}">
				<i class="fa fa-plus" aria-hidden="true"></i> Add
			</a>
		</div>
	</div>

	<table class="table">
		<thead>
			<th>Email</th>
			<th>Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Birth</th>
			<th>Pathology</th>
			<!--th>Doctor</th-->
			<th>Actions</th>
		</thead>
		@foreach($patients as $patient)
		<tbody>
			<td>{{$patient->username}}</td>
			<td>{{$patient->name}}</td>
			<td>{{$patient->last_name}}</td>
			<td>{{$patient->gender}}</td>
			<td>{{date('d/m/Y',strtotime($patient->birth))}}</td>
			<td>{{$patient->pathology}}</td>
			<!--td>{{$patient->doctor->last_name.', '.$patient->doctor->name}}</td-->
			<td>
				<a class="btn btn-sm btn-secondary" href="{{ route('patient.edit', $patient->id) }}" style="width: 56.91px; float:left; margin-right: 5px;">Edit</a>
              	<form action="{{ route('patient.destroy', $patient->id) }}" method="POST" style="width: 56.91px; float:left;">
                	{{ method_field('DELETE') }}
                	{{ csrf_field() }}
	                <button type='submit' class="btn btn-sm btn-outline-danger">Delete</button>
	            </form>
			</td>
		</tbody>
		@endforeach
	</table>

	@include('pagination', ['items' => $patients, 'controller' => 'patient'])

@stop