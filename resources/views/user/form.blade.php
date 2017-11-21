<div class="form-group {{ $errors->has('username') ? 'has-danger' :'' }}">
	<label for="">Name</label>
	<input type="text" name="username" class="form-control"  value="{{ old('user.username') ?: $user->username }}" placeholder="Enter a Name"></input>
    <div class="form-control-feedback">{{ $errors->first('username') }}</div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-danger' :'' }}">
	<label for="">Email</label>
	<input type="email" name="email" class="form-control" value="{{ old('user.email') ?: $user->email }}" placeholder="Enter a Email"></input>
    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
</div>
<div class="form-group {{ $errors->has('password') ? 'has-danger' :'' }}">
	<label for="">Password</label>
	<input type="password" name="password" class="form-control" value="" placeholder="Enter a Password"></input>
    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
