@extends ('home.index')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Calificacion</h3>

            <form action="{{ route('calificacion.store', '$calificacion') }}" method="POST">
                @method('post')
                @csrf

                <div class="form-group">
                    <label for="profesor_id">Profesor</label>
                    <select name="profesor_id" class="form-control">
                        <option value="">Seleccione un profesor</option>
                        @foreach ($profesores as $profesor)
                            <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="carrera_id">Carrera</label>
                    <select name="carrera_id" class="form-control">
                        <option value="">Seleccione una carrera</option>
                        @foreach($carreras as $carrera)
                            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="materia_id">Materia</label>
                    <select name="materia_id" class="form-control">
                        <option value="">Seleccione una materia</option>
                        @foreach ($materias as $materia)
                            <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="alumno_id">Alumno</label>
                    <select name="alumno_id" class="form-control">
                        <option value="">Seleccione un alumno</option>
                        @foreach ($alumnos as $alumno)
                            <option value="{{ $alumno->id }}">{{ $alumno->nombre }}</option>
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="calificacion">Calificacion</label>
                    <input type="number" name="calificacion" class="form-control" placeholder="Calificacion...">
                </div>


                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <input class="btn btn-success"type="button" onclick="history.back()" name="Regresar" value="Regresar">
                </div>


            </form>
        </div>

    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@endsection
