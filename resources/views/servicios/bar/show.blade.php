@extends ('home.index')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion del bar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bar.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Producto:</strong>
                {{ $bar->producto }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                {{ $bar->precio }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo:</strong>
                {{ $bar->codigo }}
            </div>
        </div>
       
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vendidos:</strong>
                {{ $bar->vendido }}
            </div>
        </div>
        
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('bar.destroy', $bar) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar producto del bar

            </button>
            </form>
        </div>
    </div>
@endsection