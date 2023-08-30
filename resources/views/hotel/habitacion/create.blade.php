@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva habitacion</h3>

			<form action="{{ route('habitaciones.store', '$habitacion') }}"  method="POST" >
				@method('post')
				@csrf	

<div class="form-group">
    <label for="titulo">Hotel</label>
    <input type="text" name="hotel_id" class="form-control" placeholder="Nombre del Hotel..." >
</div>
<div class="form-group">
    <label for="rfc">Numero de habitacion</label>
    <input type="text" name="n_habitaciones" class="form-control" placeholder="Numero de habitacion..." >
</div>
<div class="form-group">
    <label for="direccion">Total de camas</label>
    <input type="text" name="camas" class="form-control" placeholder="Numero de camas..." >
</div>
<div class="form-group">
    <label for="celular">Estado de la habitacion</label>
    <input type="text" name="disponibilidad_id" class="form-control" placeholder="Disponibilidad..." >
</div>
<div class="form-group">
    <label for="imagen">Elige la imagen</label>
    <input type="file" name="imagen" class="form-control" placeholder="Selecciona una imagen..." >
</div>
<div class="form-group">
    <label for="imagen">Mobiliario de la habitacion</label>
    <input type="text" name="mobiliario" class="form-control" placeholder="mobiliario..." >
</div>
<div class="form-group">
    <label for="apertura">Servicios</label>
    <input type="text" name="apertura" class="form-control" placeholder="servicios..." >
</div>
<div class="form-group">
    <label for="cierre">Precio</label>
    <input type="text" name="cierre" class="form-control" placeholder="precio..." >
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