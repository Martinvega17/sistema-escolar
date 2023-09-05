@extends ('home.index')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion del Profesor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profesor.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombres:</strong>
                {{ $profesor->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $profesor->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {{ $profesor->telefono }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion:</strong>
                {{ $profesor->direccion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cedula:</strong>
                {{ $profesor->cedula }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Experiencia:</strong>
                {{ $profesor->experiencia }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Contratacion:</strong>
                {{ $profesor->fecha_contratacion }}
            </div>
        </div>
        

    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('profesor.destroy', $profesor) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar Profesor

            </button>
            </form>
        </div>
    </div>
@endsection