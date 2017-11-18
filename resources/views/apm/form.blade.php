<div class="form-group {{ $errors->has('code') ? 'has-danger' :'' }}">
	<label for="">Código</label>
	<input type="text" name="code" class="form-control" value="{{ old('apm.code') ?: $apm->code }}" placeholder="Ingrese el código del APM"></input>
    <div class="form-control-feedback">{{ $errors->first('code') }}</div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-danger' :'' }}">
	<label for="">Descripción</label>
	<input type="text" name="description" class="form-control"  value="{{ old('apm.description') ?: $apm->description }}" placeholder="Ingrese la descripción del APM"></input>
    <div class="form-control-feedback">{{ $errors->first('description') }}</div>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
