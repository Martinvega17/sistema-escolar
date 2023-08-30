@extends ('home.index')
@section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Huespedes <a href="{{route('huesped.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
        
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                </div>
                    </div>
                <table class="table table-striped table-bordered table-condensed table-hover" id="datatable">
                    <thead>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Cedula</th>
                        <th>Direccion</th>
                        <th>Celular</th>
                        <th>Habitacion</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach ($huespedes as $huesped)
            {{-- YOUR CODE/TEXT HERE --}}
                    <tr>
                        <td>{{ $huesped->id}}</td>
                        <td>{{ $huesped->nombres}}</td>
                        <td>{{ $huesped->cedula}}</td>
                        <td>{{ $huesped->direccion}}</td>
                        <td>{{ $huesped->celular}}</td>
                        <td>{{ $huesped->habitacion_id}}</td>
                        
                        <td>                    
                            <a  href="{{route('huesped.edit', $huesped->id) }}" ><button class="btn btn-info">Editar</button></a>
                            <a  href="{{route('huesped.show', $huesped->id) }}"><button class="btn btn-danger">Ver</button></a>
                        </td>
                    </tr>
                    @endforeach
                            
                </table>
                <div class="d-flex justify-content-center">
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>
@endsection