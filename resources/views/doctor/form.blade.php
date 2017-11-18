<div class="form-group {{ $errors->has('name') ? 'has-danger' :'' }}">
	<label for="">Nombre</label>
	<input type="text" name="name" class="form-control"  value="{{ old('doctor.name') ?: $doctor->name }}" placeholder="Ingrese el Nombre"></input>
    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-danger' :'' }}">
	<label for="">Apellido</label>
	<input type="text" name="last_name" class="form-control"  value="{{ old('doctor.last_name') ?: $doctor->last_name }}" placeholder="Ingrese el Apellido"></input>
    <div class="form-control-feedback">{{ $errors->first('last_name') }}</div>
</div>
<div class="form-group {{ $errors->has('code') ? 'has-danger' :'' }}">
	<label for="">Matrícula</label>
	<input type="text" name="code" class="form-control" value="{{ old('doctor.code') ?: $doctor->code }}" placeholder="Ingrese la Matrícula"></input>
    <div class="form-control-feedback">{{ $errors->first('code') }}</div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-danger' :'' }}">
	<label for="">Email</label>
	<input type="email" name="email" class="form-control" value="{{ old('doctor.email') ?: $doctor->email }}" placeholder="Ingrese el Email"></input>
    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
</div>
<div class="form-group {{ $errors->has('mobile') ? 'has-danger' :'' }}">
	<label for="">Teléfono</label>
	<input type="text" name="mobile" class="form-control" value="{{ old('doctor.mobile') ?: $doctor->mobile }}" placeholder="Ingrese el Teléfono"></input>
    <div class="form-control-feedback">{{ $errors->first('mobile') }}</div>
</div>
<div class="form-group {{ $errors->has('apm_id') ? 'has-danger' :'' }}">
    <label for="">APM</label>
    <select class="form-control" name="apm_id" class="form-control" value="{{ old('doctor.apm_id') ?: $doctor->apm_id }}">
	    <option value="0">Seleccione un APM</option>
		@foreach($apms as $apm)
	    <option value="{{$apm->id}}" {{ $doctor->apm_id == $apm->id ? 'selected' : '' }}>
	    	{{$apm->description.' ('.$apm->code.')'}}
    	</option>
	    @endforeach
    </select>
    <div class="form-control-feedback">{{ $errors->first('apm_id') }}</div>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>