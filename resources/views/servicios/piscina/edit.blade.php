@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Servicios de la piscina</h3>

			<form action="{{ route('piscina.update', $piscina) }}"  method="POST" >
				@csrf	
				@method('put')
				<div class="form-group">
					<label for="opcion">Servicio</label>
					<input type="text" name="opcion" class="form-control" placeholder="Servicio..." value="{{ old('opcion', $piscina->opcion) }}">
				</div>
				
				<div class="form-group">
					<label for="precio">Precio</label>
					<input type="text" name="precio" class="form-control" placeholder="Precio..." value="{{ old('precio', $piscina->precio) }}">
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