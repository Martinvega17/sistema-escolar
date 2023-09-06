@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Materia</h3>

			<form action="{{ route('materias.store', '$materia') }}"  method="POST" >
				@method('post')
				@csrf	

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombre..." >
</div>
<div class="form-group">
    <label for="codigo">Codigo</label>
    <input type="text" name="codigo" class="form-control" placeholder="Codigo..." >
</div>
<div class="form-group">
    <label for="creditos">Creditos</label>
    <input type="text" name="creditos" class="form-control" placeholder="Creditos..." >
</div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" placeholder="Descripcion..." >
</div>
<div class="form-group">
    <label for="carrera_id">Carrera</label>
    <input type="text" name="carrera_id" class="form-control" placeholder="Carrera..." >
</div>
<div class="form-group">
    <label for="profesor_id">Profesor</label>
    <input type="text" name="profesor_id" class="form-control" placeholder="Profesor..." >
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