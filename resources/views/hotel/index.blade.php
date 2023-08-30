@extends('home.index')
@section ('contenido')
@auth

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Hoteles <a href="{{route('hotel.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
        
    </div>
 

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
          
            <div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      
                </div>
                    </div>
                <table class="table table-striped table-bordered table-condensed table-hover" id="datatable" tyle="width:100%">
                            <thead>
                                
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>rfc</th>
                                <th>direccion</th>
                                <th>celular</th>
                                <th>descripcion</th>
                                <th>imagen</th>
                                <th>apertura</th>
                                <th>cierre</th>
                                <th>url_facebook</th>
                                <th>url_whatsapp</th>
                                <th>Usuario</th>
                                <th>Categoria</th>
            
                                <th>Opciones</th>
                                
                            </thead>
                            <tbody>
                            @foreach ($hoteles as $hotel)
            
                            <tr>
                                <td>{{ $hotel->id}}</td>
                                <td>{{ $hotel->titulo}}</td>
                                <td>{{ $hotel->rfc}}</td>
                                <td>{{ $hotel->direccion}}</td>
                                <td>{{ $hotel->celular}}</td>
                                <td>{{ $hotel->descripcion}}</td>
                                <td>{{ $hotel->imagen}}</td>
                                <td>{{ $hotel->apertura}}</td>
                                <td>{{ $hotel->cierre}}</td>
                                <td>{{ $hotel->url_facebook}}</td>
                                <td>{{ $hotel->url_whatsapp}}</td>
                                <td>{{ $hotel->user_id}}</td>
                                <td>{{ $hotel->categoria_id }}</td>
                                <td>
                                    
                                    <a  href="{{route('hotel.edit', $hotel->id) }}" ><button class="btn btn-info">Editar</button></a>
                                    <a  href="{{route('hotel.show', $hotel->id) }}"><button class="btn btn-danger">Ver</button></a>
            
                                </td>
                            </tr>
                            @endforeach    
                            </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
    
</div>
    
@endauth
@endsection