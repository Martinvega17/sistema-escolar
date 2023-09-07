@extends ('home.index')
@section ('contenido')
@auth
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        @if (auth()->user() && auth()->user()->hasRole('admin'))
        <h3>Listado de Profesores <a href="{{route('profesor.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
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
                        <th>Nombres</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Cedula</th>
                        <th>Experiencia</th>
                        <th>Fecha de Contratacion</th>
                        <th>Materias </th>
                        <th>Carreras </th>
                        @if (auth()->user() && auth()->user()->hasRole('admin'))
                        <th>Opciones</th>
                        @endif
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
                        <td>{{ $profesor->experiencia}} años</td>
                        <td>{{ $profesor->fecha_contratacion}}</td>
                        <td>
                            @if ($profesor->materia)
                            {{ $profesor->materia->nombre }}
                            @else
                            Sin Materias asignadas
                            @endif
                        </td>
                        <td>
                            @if ($profesor->carrera)
                            {{ $profesor->carrera->nombre }}
                            @else
                            Sin carrera asignada
                            @endif
                        </td>



                        @if (auth()->user() && auth()->user()->hasRole('admin'))
                        <td>
                            <a href="{{ route('profesor.edit', $profesor->id) }}"><button class="btn btn-info">Editar</button></a>
                            <a href="{{route('profesor.show', $profesor->id) }}"><button class="btn btn-danger">Ver</button></a>
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