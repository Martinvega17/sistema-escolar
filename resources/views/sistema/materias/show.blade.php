@extends ('home.index')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion de las Materias</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('materias.index') }}"> Regresar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $materia->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo:</strong>
                {{ $materia->codigo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creditos:</strong>
                {{ $materia->creditos }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $materia->descripcion }}
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('materias.destroy', $materia) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Eliminar Carrera

                </button>
            </form>
        </div>
    </div>
@endsection
