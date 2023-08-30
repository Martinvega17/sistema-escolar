@extends ('home.index')
@section ('contenido')
@auth
    

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de categorias <a href="{{route('categorias.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
        
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
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach ($categorias as $cat)
            
                    <tr>
                        <td>{{ $cat->id}}</td>
                        <td>{{ $cat->nombre}}</td>
                        <td>{{ $cat->descripcion}}</td>
                        <td>                    
                            <a  href="{{route('categorias.edit', $cat->id) }}" ><button class="btn btn-info">Editar</button></a>
                            <a  href="{{route('categorias.show', $cat->id) }}"><button class="btn btn-danger">Ver</button></a>
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