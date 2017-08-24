<div class="form-group {{ $errors->has('name') ? 'has-danger' :'' }}">
	<label for="">Nombre</label>
	<input type="text" name="user[username]" class="form-control"  value="{{ old('user.username') ?: $user->username }}" placeholder="Ingrese el nombre del usuario"></input>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-danger' :'' }}">
	<label for="">Email</label>
	<input type="email" name="user[email]" class="form-control" value="{{ old('user.email') ?: $user->email }}" placeholder="Ingrese el email del usuario"></input>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
