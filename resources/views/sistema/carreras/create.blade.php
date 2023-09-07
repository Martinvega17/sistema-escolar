@extends ('home.index')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Carrera</h3>

            <form action="{{ route('carreras.store', '$carrera') }}" method="POST">
                @method('post')
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre de la Carrera...">
                </div>
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="text" name="clave" class="form-control" placeholder="Clave de la carrera...">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripcion de la carrera...">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" class="form-control" placeholder="Disponibilidad...">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <input class="btn btn-success"type="button" onclick="history.back()" name="Regresar" value="Regresar">
                </div>


            </form>
        </div>

    </div>



@endsection
