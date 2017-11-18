<div class="form-group {{ $errors->has('patient_id') ? 'has-danger' :'' }}">
    <label for="">Paciente</label>
    <select class="form-control" name="patient_id" class="form-control" value="{{ old('sku_product.patient_id') ?: $sku_product->patient_id }}">
	    <option value=""></option>
		@foreach($patients as $patient)
	    <option value="{{$patient->id}}" {{ $sku_product->patient_id == $patient->id ? 'selected' : '' }}>
	    	{{$patient->username}}
    	</option>
	    @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('product_id') ? 'has-danger' :'' }}">
    <label for="">Producto</label>
    <select class="form-control" name="product_id" class="form-control" value="{{ old('sku_product.product_id') ?: $sku_product->product_id }}">
	    <option value=""></option>
		@foreach($products as $product)
	    <option value="{{$product->id}}" {{ $sku_product->product_id == $product->id ? 'selected' : '' }}>
	    	{{$product->description}}
    	</option>
	    @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('code') ? 'has-danger' :'' }}">
	<label for="">Código</label>
	<input type="text" name="code" class="form-control" value="{{ old('sku_product.code') ?: $sku_product->code }}" placeholder="Ingrese el código QR del Producto"></input>
    <div class="form-control-feedback">{{ $errors->first('code') }}</div>
</div>
<div class="form-group {{ $errors->has('doctor_id') ? 'has-danger' :'' }}">
    <label for="">Médico</label>
    <select class="form-control" name="doctor_id" class="form-control" value="{{ old('sku_product.doctor_id') ?: $sku_product->doctor_id }}">
	    <option value=""></option>
		@foreach($doctors as $doctor)
	    <option value="{{$doctor->id}}" {{ $sku_product->doctor_id == $doctor->id ? 'selected' : '' }}>
	    	{{$doctor->last_name.', '.$doctor->name}}
    	</option>
	    @endforeach
    </select>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
