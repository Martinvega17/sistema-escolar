@extends ('home.index')
@section ('contenido')
@auth
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Profesores <a href="{{route('profesor.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
        
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
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Cedula</th>
                        <th>Experiencia</th>
                        <th>Fecha de Contratacion</th>
                        
                        <th>Opciones</th>
                    </thead>
                    @foreach ($profesores as $profesor)
            {{-- YOUR CODE/TEXT HERE --}}
                    <tr>
                        <td>{{ $profesor->id}}</td>
                        <td>{{ $profesor->nombre}}</td>
                        <td>{{ $profesor->email}}</td>
                        <td>{{ $profesor->telefono}}</td>
                        <td>{{ $profesor->direccion}}</td>
                        <td>{{ $profesor->cedula}}</td>
                        <td>{{ $profesor->experiencia}}</td>
                        <td>{{ $profesor->fecha_contratacion}}</td>
                        
                        <td>{{ $profesor->habitacion_id}}</td>
                        
                        <td>                    
                            <a  href="{{route('profesor.edit', $profesor->id) }}" ><button class="btn btn-info">Editar</button></a>
                            <a  href="{{route('profesor.show', $profesor->id) }}"><button class="btn btn-danger">Ver</button></a>
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
@endauth
@endsection