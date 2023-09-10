@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Alumno</h3>

			<form action="{{ route('alumno.update', $alumno) }}"  method="POST">
				@method('put')
				<x-alumno-form :alumno="$alumno" :materias="$materias" :carreras="$carreras" />


			
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