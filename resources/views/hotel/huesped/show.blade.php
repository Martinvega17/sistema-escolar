@extends ('home.index')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion del huesped</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('huesped.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombres:</strong>
                {{ $huesped->nombres }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cedula:</strong>
                {{ $huesped->cedula }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion:</strong>
                {{ $huesped->direccion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Celular:</strong>
                {{ $huesped->celular }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $huesped->email }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('huesped.destroy', $huesped) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar Huesped

            </button>
            </form>
        </div>
    </div>
@endsection