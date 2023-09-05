@extends ('home.index')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion de la Categoria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $categoria->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $categoria->descripcion }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar Categoria

            </button>
            </form>
        </div>
    </div>
@endsection