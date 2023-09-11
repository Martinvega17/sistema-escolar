@extends ('home.index')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Vista General de las Calificaciones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('calificacion.index') }}"> Regresar</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Profesor:</strong>
                @if ($calificacion->profesor)
                    {{ $calificacion->profesor->nombre }}
                @else
                    Sin profesor asignado
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carrera:</strong>
                @if ($calificacion->carrera)
                    {{ $calificacion->carrera->nombre }}
                @else
                    Sin carrera asignada
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Materia:</strong>
                @if ($calificacion->materia)
                    {{ $calificacion->materia->nombre }}
                @else
                    Sin materia asignada
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alumno:</strong>
                @if ($calificacion->alumno)
                    {{ $calificacion->alumno->nombre }}
                @else
                    Sin alumno asignado
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Calificacion:</strong>
                {{ $calificacion->calificacion }}
            </div>
        </div>

    </div>

    </div>
{{--     <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('calificacion.destroy', $calificacion) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Eliminar Calificacion

                </button>
            </form>
        </div>
    </div> --}}
@endsection
