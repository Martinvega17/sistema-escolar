@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Producto de bar</h3>

			<form action="{{ route('bar.store', '$bar') }}"  method="POST" >
				@method('post')
				@csrf	

				<div class="form-group">
    <label for="producto">Producto</label>
    <input type="text" name="producto" class="form-control" placeholder="Producto...">
</div>
<div class="form-group">
    <label for="precio">Precio</label>
    <input type="text" name="precio" class="form-control" placeholder="Precio...">
</div>
<div class="form-group">
    <label for="codigo">Codigo</label>
    <input type="text" name="codigo" class="form-control" placeholder="Codigo...">
</div>
<div class="form-group">
    <label for="vendido">Vendido</label>
    <input type="text" name="vendido" class="form-control" placeholder="Vendido...">
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
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
			

@endsection