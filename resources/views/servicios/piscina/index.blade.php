@extends ('home.index')
@section ('contenido')
@auth
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Servicios de la piscina <a href="{{route('piscina.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
          
            <table class="table table-striped table-bordered table-condensed table-hover" id="datatable" tyle="width:100%">
                <thead>
                    <th>Id</th>
                    <th>Opcion</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                    
                </thead>
                <tbody>
                @foreach ($piscinas as $piscina)

                <tr>
                    <td>{{ $piscina->id}}</td>
                    <td>{{ $piscina->opcion}}</td>
                    <td>{{ $piscina->precio}}</td>
                    <td>
                        
                        <a  href="{{route('piscina.edit', $piscina->id) }}" ><button class="btn btn-info">Editar</button></a>
                        <a  href="{{route('piscina.show', $piscina->id) }}"><button class="btn btn-danger">Ver</button></a>

                    </td>
                </tr>
                @endforeach    
                </tbody>
            </table>
            </div>
        </div>
        
    </div>
</div>
@endauth
@endsection