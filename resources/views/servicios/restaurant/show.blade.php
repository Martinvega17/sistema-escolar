@extends ('home.index')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion del restaurante</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('restaurant.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Producto:</strong>
                {{ $restaurant->producto }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo:</strong>
                {{ $restaurant->codigo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                {{ $restaurant->precio }}
            </div>
        </div>
       
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vendidos:</strong>
                {{ $restaurant->vendido }}
            </div>
        </div>
        
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('restaurant.destroy', $restaurant) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar Servicio de restaurante

            </button>
            </form>
        </div>
    </div>
@endsection