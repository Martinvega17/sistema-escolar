@extends ('home.index')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion del Alumno</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('alumno.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombres:</strong>
                {{ $alumno->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $alumno->email }}
            </div>
        </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Matricula:</strong>
                {{ $alumno->telefono }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion:</strong>
                {{ $alumno->direccion }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {{ $alumno->telefono }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Semestre:</strong>
                {{ $alumno->semestre }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Nacimiento:</strong>
                {{ $alumno->fecha_nacimiento }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sexo:</strong>
                {{ $alumno->sexo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Edad:</strong>
                {{ $alumno->edad }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CURP:</strong>
                {{ $alumno->curp }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Ingreso:</strong>
                {{ $alumno->fecha_ingreso }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $alumno->estatus }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observaciones:</strong>
                {{ $alumno->observaciones }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto:</strong>
                {{ $alumno->foto }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carrera:</strong>
                {{ $alumno->carrera->nombre }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Materia:</strong>
                {{ $alumno->materia->nombre }}
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('alumno.destroy', $alumno) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar Alumno

            </button>
            </form>
        </div>
    </div>
@endsection