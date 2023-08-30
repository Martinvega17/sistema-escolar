@extends ('home.index')
@section ('contenido')
@auth

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Servicios del bar <a href="{{route('bar.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
            <h2><a href="{{route('exports.bar.export')}}"><button class="btn btn-warning">Exportar a Excel</button></a></h2>
            <h2><a href="{{route('exports.bar.export')}}"><button class="btn btn-primary">Exportar a PDF</button></a></h2>    
    
    </div>
</div>
<div class="row">
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
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Codigo</th>
                                <th>Vendido</th>
                                <th>Opciones</th>
                            </thead>
                            @foreach ($bares as $bar)
            
                            <tr>
                                <td>{{ $bar->id}}</td>
                                <td>{{ $bar->producto}}</td>
                                <td>{{ $bar->precio}}</td>
                                <td>{{ $bar->codigo}}</td>
                                <td>{{ $bar->vendido}}</td>
                                <td>
                                    
                                    <a  href="{{route('bar.edit', $bar->id) }}" ><button class="btn btn-info">Editar</button></a>
                                    <a  href="{{route('bar.show', $bar->id) }}"><button class="btn btn-danger">Ver</button></a>
            
                                </td>
                            </tr>
                            @endforeach
                            
                </table>
            </div>
            </div>
        </div>
        
    </div>
</div>
@endauth
@endsection