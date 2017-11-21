<div class="form-group {{ $errors->has('username') ? 'has-danger' :'' }}">
	<label for="">Email</label>
	<input type="email" name="username" class="form-control"  value="{{ old('patient.username') ?: $patient->username }}" placeholder="Enter a Username"></input>
    <div class="form-control-feedback">{{ $errors->first('username') }}</div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-danger' :'' }}">
	<label for="">Name</label>
	<input type="text" name="name" class="form-control"  value="{{ old('patient.name') ?: $patient->name }}" placeholder="Enter Name"></input>
    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-danger' :'' }}">
	<label for="">Last Name</label>
	<input type="text" name="last_name" class="form-control"  value="{{ old('patient.last_name') ?: $patient->last_name }}" placeholder="Enter Last Name"></input>
    <div class="form-control-feedback">{{ $errors->first('last_name') }}</div>
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-danger' :'' }}">
    <label for="">Gender</label>
    <select class="form-control" name="gender" class="form-control" value="{{ old('patient.gender') ?: $patient->gender }}">
	    <option value="">Pick a Gender</option>
	    <option value="Male" {{ $patient->gender == 'Male' ? 'selected' : '' }}>Male</option>
	    <option value="Female" {{ $patient->gender == 'Female' ? 'selected' : '' }}>Female</option>
    </select>
    <div class="form-control-feedback">{{ $errors->first('gender') }}</div>
</div>
<div class="form-group {{ $errors->has('birth') ? 'has-danger' :'' }}">
	<label for="">Birth</label>
	<input type="date" name="birth" class="form-control" value="{{ old('patient.birth') ?: date('Y-m-d',strtotime($patient->birth)) }}" placeholder="mm/dd/yyyy"></input>
    <div class="form-control-feedback">{{ $errors->first('birth') }}</div>
</div>
<div class="form-group {{ $errors->has('pathology') ? 'has-danger' :'' }}">
    <label for="">Pathology</label>
    <select class="form-control" name="pathology" class="form-control" value="{{ old('patient.pathology') ?: $patient->pathology }}">
	    <option value="">Pick a Pathology</option>
	    <option value="ASTHMA" {{ $patient->pathology == 'ASTHMA' ? 'selected' : '' }}>ASTHMA</option>
	    <option value="COPD" {{ $patient->pathology == 'COPD' ? 'selected' : '' }}>COPD</option>
    </select>
    <div class="form-control-feedback">{{ $errors->first('pathology') }}</div>
</div>
<!--div class="form-group {{ $errors->has('doctor_id') ? 'has-danger' :'' }}">
    <label for="">Médico</label>
    <select class="form-control" name="doctor_id" class="form-control" value="{{ old('patient.doctor_id') ?: $patient->doctor_id }}">
	    <option value="">Seleccione un Médico</option>
		@foreach($doctors as $doctor)
	    <option value="{{$doctor->id}}" {{ $patient->doctor_id == $doctor->id ? 'selected' : '' }}>
	    	{{$doctor->last_name.', '.$doctor->name}}
    	</option>
	    @endforeach
    </select>
    <div class="form-control-feedback">{{ $errors->first('doctor_id') }}</div>
</div-->
<div class="form-group {{ $errors->has('password') ? 'has-danger' :'' }}">
	<label for="">Passowrd</label>
	<input type="password" name="password" class="form-control" value="" placeholder="Enter a password"></input>
    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
</div>
<button type="submit" class="btn btn-primary">Save</button>