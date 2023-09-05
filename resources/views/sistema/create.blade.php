@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Hotel</h3>

			<form action="{{ route('hotel.store', '$hotel') }}"  method="POST" >
				@method('post')
				@csrf	

<div class="form-group">
    <label for="titulo">Nombre</label>
    <input type="text" name="titulo" class="form-control" placeholder="Nombre del Hotel..." >
</div>
<div class="form-group">
    <label for="rfc">RFC</label>
    <input type="text" name="rfc" class="form-control" placeholder="rfc..." >
</div>
<div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" class="form-control" placeholder="direccion..." >
</div>
<div class="form-group">
    <label for="celular">Celular</label>
    <input type="tel" name="celular" class="form-control" placeholder="celular..." >
</div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" placeholder="descripcion..." >
</div>
<div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen" class="form-control" placeholder="imagen..." >
</div>
<div class="form-group">
    <label for="apertura">Apertura</label>
    <input type="time" name="apertura" class="form-control" placeholder="apertura..." >
</div>
<div class="form-group">
    <label for="cierre">Cierre</label>
    <input type="time" name="cierre" class="form-control" placeholder="cierre..." >
</div>
<div class="form-group">
    <label for="url_facebook">url facebook</label>
    <input type="url" name="url_facebook" class="form-control" placeholder="url facebook..." >
</div>
<div class="form-group">
    <label for="url_whatsapp">url whatsapp</label>
    <input type="url" name="url_whatsapp" class="form-control" placeholder="url whatsapp..." >
</div>

<div class="form-group">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <input class="btn btn-success"type="button" onclick="history.back()" name="Regresar" value="Regresar">
</div>

			
			</form>  
		</div>
	
	</div>
	@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
			

@endsection