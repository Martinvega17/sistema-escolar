@extends ('home.index')
@section ('contenido')
@auth
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        @if (auth()->user() && auth()->user()->hasRole('admin'))
        <h3>Listado de Alumnos <a href="{{route('alumno.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
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
                        <th>Matricula</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Semestre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Sexo </th>
                        <th>Edad </th>
                        <th>CURP </th>
                        <th>Fecha de Ingreso </th>
                        <th>Status </th>
                        <th>Observaciones </th>
                        <th>Foto </th>
                        <th>Carrera </th>
                        <th>Materias </th>

                        @if (auth()->user() && auth()->user()->hasRole('admin'))
                        <th>Opciones</th>
                        @endif
                    </thead>
                    @foreach ($alumnos as $alumno)
                    {{-- YOUR CODE/TEXT HERE --}}
                    <tr>
                        <td>{{ $alumno->id}}</td>
                        <td>{{ $alumno->nombre}}</td>
                        <td>{{ $alumno->email}}</td>
                        <td>{{ $alumno->matricula}}</td>
                        <td>{{ $alumno->direccion}}</td>
                        <td>{{ $alumno->telefono}}</td>
                        <td>{{ $alumno->semestre}}</td>
                        <td>{{ $alumno->fecha_nacimiento}}</td>
                        <td>{{ $alumno->sexo}}</td>
                        <td>{{ $alumno->edad}}</td>
                        <td>{{ $alumno->curp}}</td>
                        <td>{{ $alumno->fecha_ingreso}}</td>
                        <td>{{ $alumno->estatus}}</td>
                        <td>{{ $alumno->observaciones}}</td>
                        <td>
                            {{-- <img src="{{asset('assets/img/alumnos/'.$alumno->foto)}}" alt="{{ $alumno->nombre}}" height="100px" width="100px" class="img-thumbnail"> --}}
                            {{ $alumno->foto}}
                        </td>
                        <td>
                            @if ($alumno->carrera)
                            {{ $alumno->carrera->nombre }}
                            @else
                            Sin Carrera asignada
                            @endif
                        </td>

                        <td>
                            @if ($alumno->materia)
                            {{ $alumno->materia->nombre }}
                            @else
                            Sin Materias asignadas
                            @endif
                        </td>

                        @if (auth()->user() && auth()->user()->hasRole('admin'))
                        <td>
                            <a href="{{ route('alumno.edit', $alumno->id) }}"><button class="btn btn-info">Editar</button></a>
                            <a href="{{route('alumno.show', $alumno->id) }}"><button class="btn btn-danger">Ver</button></a>
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