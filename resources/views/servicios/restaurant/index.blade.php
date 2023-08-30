@extends ('home.index')
@section ('contenido')
@auth

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Servicios del restaurante <a href="{{route('restaurant.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
          
            <table class="table table-striped table-bordered table-condensed table-hover" id="datatable">
                <thead>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Codigo</th>
                    <th>Precio</th>
                    <th>Vendidos</th>
                    <th>Opciones</th>
                </thead>
                    <tbody>
                    @foreach ($restaurants as $restaurant)

                        <tr>
                            <td>{{ $restaurant->id}}</td>
                            <td>{{ $restaurant->producto}}</td>
                            <td>{{ $restaurant->codigo}}</td>
                            <td>{{ $restaurant->precio}}</td>
                            <td>{{ $restaurant->vendido}}</td>
                            <td>
                        
                                <a  href="{{route('restaurant.edit', $restaurant->id) }}" ><button class="btn btn-info">Editar</button></a>
                                <a  href="{{route('restaurant.show', $restaurant->id) }}"><button class="btn btn-danger">Ver</button></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
        
</div>
    
@endauth
@endsection