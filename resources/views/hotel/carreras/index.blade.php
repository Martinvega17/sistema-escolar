@extends ('home.index')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Carreras <a href="{{ route('carreras.create') }}"><button
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
                            <th>Clave</th>
                            <th>Descripcion</th>
                            <th>imagen</th>


                            <th>Opciones</th>

                        </thead>
                        <tbody>
                            @foreach ($carreras as $carrera)
                                <tr>
                                    <td>{{ $carrera->id }}</td>
                                    <td>{{ $carrera->nombre }}</td>
                                    <td>{{ $carrera->clave }}</td>
                                    <td>{{ $carrera->descripcion }}</td>
                                    <td>{{ $carrera->imagen }}</td>
                                    <td>

                                        <a href="{{ route('carreras.edit', $carrera->id) }}"><button
                                                class="btn btn-info">Editar</button></a>
                                        <a href="{{ route('carreras.show', $carrera->id) }}"><button
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
