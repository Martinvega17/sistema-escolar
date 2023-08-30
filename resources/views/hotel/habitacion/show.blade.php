@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion del hotel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hotel.index') }}"> Regresar</a>
            </div>
        </div>
        </div>
   
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $hotel->titulo }}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>RFC:</strong>
                {{ $hotel->rfc }}
            </div>
        </div>
             
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Direccion:</strong>
            {{ $hotel->direccion }}
        </div>
        </div>
               
            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
            <strong>Celular:</strong>
            {{ $hotel->celular }}
        </div>
        </div>
            
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripcion:</strong>
            {{ $hotel->descripcion }}
        </div>
        </div>
               
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Imagen:</strong>
            {{ $hotel->imagen }}
        </div>
     </div>
                
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apertura:</strong>
            {{ $hotel->apertura }}
        </div>
     </div>
                
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cierre:</strong>
            {{ $hotel->cierre }}
        </div>
     </div>
               
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Url facebook:</strong>
            {{ $hotel->url_facebook }}
        </div>
     </div>
               
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Url whatsapp:</strong>
            {{ $hotel->url_whatsapp }}
        </div>
    </div>
</div>
       
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('hotel.destroy', $hotel) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar Hotel

            </button>
            </form>
        </div>
    </div>
@endsection