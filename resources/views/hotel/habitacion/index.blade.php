@extends ('home.index')
@section ('contenido')
@auth

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Habitaciones <a href="{{route('habitaciones.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
        
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
                                <th>Hotel</th>
                                <th>huesped</th>
                                <th>n° habitaciones</th>
                                <th>n° camas</th>
                                <th>mobiliario</th>
                                <th>servicios</th>
                                <th>imagen</th>
                                <th>disponibilidad</th>
                              
            
                                <th>Opciones</th>
                                
                            </thead>
                            <tbody>
                            @foreach ($habitaciones as $habitacion)
            
                            <tr>
                                <td>{{ $habitacion->id}}</td>
                                <td>{{ $habitacion->hotel_id}}</td>
                                <td>{{ $habitacion->huesped_id}}</td>
                                <td>{{ $habitacion->n_habitaciones}}</td>
                                <td>{{ $habitacion->n_camas}}</td>
                                <td>{{ $habitacion->mobiliario}}</td>
                                <td>{{ $habitacion->servicios}}</td>
                                <td>{{ $habitacion->imagen}}</td>
                                <td>{{ $habitacion->disponibilidad_id}}</td>
                                <td>
                                    
                                    <a  href="{{route('habitaciones.edit', $habitacion->id) }}" ><button class="btn btn-info">Editar</button></a>
                                    <a  href="{{route('habitaciones.show', $habitacion->id) }}"><button class="btn btn-danger">Ver</button></a>
            
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