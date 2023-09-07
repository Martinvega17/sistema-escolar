@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Profesor</h3>

			<form action="{{ route('profesor.store', '$profesor') }}"  method="POST" >
				@method('post')
				@csrf	

<div class="form-group">
    <label for="nombre">Nombres</label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombres..." >
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email..." >
</div>
<div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="number" name="telefono" class="form-control" placeholder="Celular..." >
</div>
<div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" class="form-control" placeholder="Direccion..." >
</div>
<div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="number" name="cedula" class="form-control" placeholder="Cedula..." >
</div>
<div class="form-group">
	<label for="experiencia">Experiencia</label>
	<input type="number" name="experiencia" class="form-control" placeholder="Experiencia..." >
</div>
<div class="form-group">
	<label for="fecha_contratacion">Fecha de Contratacion</label>
	<input type="date" name="fecha_contratacion" class="form-control" placeholder="Fecha de Contratacion..." >
</div>

<div class="form-group">
    <label for="materia_id">Materia</label>
    <select name="materia_id" class="form-control">
        <option value="">Seleccione una materia</option>
        @foreach($materias as $materia)
            <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="carrera_id">Carrera</label>
    <select name="carrera_id" class="form-control">
        <option value="">Seleccione una carrera</option>
        @foreach($carreras as $carrera)
            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
        @endforeach
    </select>
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