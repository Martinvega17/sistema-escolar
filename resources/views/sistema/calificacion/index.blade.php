@extends ('home.index')
@section ('contenido')
@auth
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        @if (auth()->user() && auth()->user()->hasRole('admin'))
        <h3>Listado de Calificaciones <a href="{{route('calificacion.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
        @endif

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
                        <th>Profesor</th>
                        
                        <th>Calificacion</th>
                        <th>Materia</th>
                        <th>Alumno</th>
                        @if (auth()->user()->hasRole('admin'))
                        <th>Carrera</th>
                        
                        @endif

                        @if (auth()->user() && auth()->user()->hasRole('admin'))
                        <th>Opciones</th>
                        @endif
                    </thead>
                    @foreach ($calificaciones as $calificacion)
                    {{-- YOUR CODE/TEXT HERE --}}
                    <tr>
                        <td>{{ $calificacion->id}}</td>
                        <td>
                            @if ($calificacion->profesor)
                            {{ $calificacion->profesor->nombre }}
                            @else
                            Sin profesor asignado
                            @endif
                        </td>
                        <td>{{ $calificacion->calificacion}}</td>
                        <td>
                            @if ($calificacion->materia)
                            {{ $calificacion->materia->nombre }}
                            @else
                            Sin materia asignada
                            @endif
                        </td>
                        <td>
                            @if ($calificacion->alumno)
                            {{ $calificacion->alumno->nombre }}
                            @else
                            Sin alumno asignado
                            @endif
                        </td>
                        @if (auth()->user()->hasRole('admin'))
                        <td>
                            @if ($calificacion->carrera)
                            {{ $calificacion->carrera->nombre }}
                            @else
                            Sin carrera asignada
                            @endif
                        </td>
                        @endif
                        
                        
                        



                        @if (auth()->user() && auth()->user()->hasRole('admin'))
                        <td>
                            <a href="{{ route('calificacion.edit', $calificacion->id) }}"><button class="btn btn-info">Editar</button></a>
                            <a href="{{route('calificacion.show', $calificacion->id) }}"><button class="btn btn-danger">Ver</button></a>
                        </td>
                        @endif
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