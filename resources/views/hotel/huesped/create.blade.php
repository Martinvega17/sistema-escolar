@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Huesped</h3>

			<form action="{{ route('huesped.store', '$huesped') }}"  method="POST" >
				@method('post')
				@csrf	

<div class="form-group">
    <label for="nombres">Nombres</label>
    <input type="text" name="nombres" class="form-control" placeholder="Nombres..." >
</div>
<div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="text" name="cedula" class="form-control" placeholder="Cedula..." >
</div>
<div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" class="form-control" placeholder="Direccion..." >
</div>
<div class="form-group">
    <label for="celular">Celular</label>
    <input type="text" name="celular" class="form-control" placeholder="Celular..." >
</div>
<div class="form-group">
    <label for="cedula">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email..." >
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