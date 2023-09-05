@extends ('home.index')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion de las Carreras</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('carreras.index') }}"> Regresar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $carrera->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Clave:</strong>
                {{ $carrera->clave }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $carrera->descripcion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                {{ $carrera->iamgen }}
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('carreras.destroy', $carrera) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Eliminar Carrera

                </button>
            </form>
        </div>
    </div>
@endsection
