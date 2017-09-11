<div class="form-group {{ $errors->has('username') ? 'has-danger' :'' }}">
	<label for="">Usuario</label>
	<input type="email" name="username" class="form-control"  value="{{ old('patient.username') ?: $patient->username }}" placeholder="Ingrese el Nombre de Usuario"></input>
    <div class="form-control-feedback">{{ $errors->first('username') }}</div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-danger' :'' }}">
	<label for="">Nombre</label>
	<input type="text" name="name" class="form-control"  value="{{ old('patient.name') ?: $patient->name }}" placeholder="Ingrese el Nombre"></input>
    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-danger' :'' }}">
	<label for="">Apellido</label>
	<input type="text" name="last_name" class="form-control"  value="{{ old('patient.last_name') ?: $patient->last_name }}" placeholder="Ingrese el Apellido"></input>
    <div class="form-control-feedback">{{ $errors->first('last_name') }}</div>
</div>
<div class="form-group {{ $errors->has('birth') ? 'has-danger' :'' }}">
	<label for="">Fecha de Nacimiento</label>
	<input type="date" name="birth" class="form-control" value="{{ old('patient.birth') ?: date('Y-m-d',strtotime($patient->birth)) }}" placeholder="Ingrese la Matrícula"></input>
    <div class="form-control-feedback">{{ $errors->first('birth') }}</div>
</div>
<div class="form-group {{ $errors->has('pathology') ? 'has-danger' :'' }}">
    <label for="">Patología</label>
    <select class="form-control" name="pathology" class="form-control" value="{{ old('patient.pathology') ?: $patient->pathology }}">
	    <option value="">Seleccione una Patología</option>
	    <option value="ASMA" {{ $patient->pathology == 'ASMA' ? 'selected' : '' }}>ASMA</option>
	    <option value="EPOC" {{ $patient->pathology == 'EPOC' ? 'selected' : '' }}>EPOC</option>
    </select>
    <div class="form-control-feedback">{{ $errors->first('pathology') }}</div>
</div>
<div class="form-group {{ $errors->has('doctor_id') ? 'has-danger' :'' }}">
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
</div>
<div class="form-group {{ $errors->has('password') ? 'has-danger' :'' }}">
	<label for="">Contraseña</label>
	<input type="password" name="password" class="form-control" value="" placeholder="Ingrese la contraseña"></input>
    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>