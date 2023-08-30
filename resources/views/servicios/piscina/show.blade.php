@extends ('home.index')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion de la Piscina</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('piscina.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Servicio:</strong>
                {{ $piscina->opcion }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                {{ $piscina->precio }}
            </div>
        </div>
       
        
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('piscina.destroy', $piscina) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar Servicio de piscina

            </button>
            </form>
        </div>
    </div>
@endsection