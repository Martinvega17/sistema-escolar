@extends ('home.index')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Materias <a href="{{ route('materias.create') }}"><button
                        class="btn btn-success">Nuevo</button></a></h3>

        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">

                <div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-condensed table-hover" id="datatable"
                        tyle="width:100%">
                        <thead>

                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Creditos</th>
                            <th>Descripcion</th>
                            <th>Carrera</th>
                            <th>Profesor</th>

                            <th>Opciones</th>

                        </thead>
                        <tbody>
                            @foreach ($materias as $materia)
                                <tr>
                                    <td>{{ $materia->id }}</td>
                                    <td>{{ $materia->nombre }}</td>
                                    <td>{{ $materia->codigo }}</td>
                                    <td>{{ $materia->creditos }}</td>
                                    <td>{{ $materia->descripcion }}</td>
                                    <td>
                                        @if ($materia->carrera)
                                        {{ $materia->carrera->nombre }}
                                        @else
                                        Sin carrera asignadas
                                        @endif
                                    </td>
                                    <td>
                                        @if ($materia->profesor)
                                        {{ $materia->profesor->nombre }}
                                        @else
                                        Sin profesor asignado
                                        @endif
                                    </td>
                                    <td>

                                        <a href="{{ route('materias.edit', $materia->id) }}"><button
                                                class="btn btn-info">Editar</button></a>
                                        <a href="{{ route('materias.show', $materia->id) }}"><button
                                                class="btn btn-danger">Ver</button></a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
@endsection
