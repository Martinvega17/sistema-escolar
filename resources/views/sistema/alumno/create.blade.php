@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Alumno</h3>

			<form action="{{ route('alumno.store', '$alumno') }}"  method="POST" >
				@method('post')
				@csrf	

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombre..." required>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email..." required>
</div>

<div class="form-group">
    <label for="matricula">Matricula</label>
    <input type="text" name="matricula" class="form-control" placeholder="Matricula..." required>
</div>

<div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" class="form-control" placeholder="Direccion..." required>
</div>

<div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" class="form-control" placeholder="Telefono..." required>
</div>

<div class="form-group">
    <label for="semestre">Semestre</label>
    <input type="text" name="semestre" class="form-control" placeholder="Semestre..." required>
</div>

<div class="form-group">
    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento..." required>
</div>

<div class="form-group">
    <label for="sexo">Sexo</label>
    <select name="sexo" class="form-control">
        <option value="">Seleccione sexo</option>
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
    </select>
</div>

<div class="form-group">
    <label for="edad">Edad</label>
    <input type="text" name="edad" class="form-control" placeholder="Edad..." required>
</div>

<div class="form-group">
    <label for="curp">CURP</label>
    <input type="text" name="curp" class="form-control" placeholder="CURP..." required>
</div>

<div class="form-group">
    <label for="fecha_ingreso">Fecha de Ingreso</label>
    <input type="date" name="fecha_ingreso" class="form-control" placeholder="Fecha de Ingreso..." required>
</div>

<div class="form-group">
    <label for="estatus">Estatus</label>
    <select name="estatus" class="form-control">
        <option value="">Seleccione estatus</option>
        <option value="Activo">Activo</option>
        <option value="Desactivo">Desactivo</option>
    </select>
</div>

<div class="form-group">
    <label for="observaciones">Observaciones</label>
    <input type="text" name="observaciones" class="form-control" placeholder="Observaciones..." required>
</div>

<div class="form-group">
    <label for="foto">Foto</label>
    <input type="file" name="foto" class="form-control" placeholder="Foto..." required>
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
    <label for="materia_id">Materia</label>
    <select name="materia_id" class="form-control">
        <option value="">Seleccione una materia</option>
        @foreach($materias as $materia)
            <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
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