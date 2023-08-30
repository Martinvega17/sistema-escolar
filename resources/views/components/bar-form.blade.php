
@csrf	
<div class="form-group">
    <label for="producto">Producto</label>
    <input type="text" name="producto" class="form-control" placeholder="Producto..." value="{{ old('producto', $bar->producto) }}">
</div>
<div class="form-group">
    <label for="precio">Precio</label>
    <input type="text" name="precio" class="form-control" placeholder="Precio..." value="{{ old('precio', $bar->precio) }}">
</div>
<div class="form-group">
    <label for="codigo">Codigo</label>
    <input type="text" name="codigo" class="form-control" placeholder="Codigo..." value="{{ old('codigo', $bar->codigo) }}">
</div>
<div class="form-group">
    <label for="vendido">Vendido</label>
    <input type="text" name="vendido" class="form-control" placeholder="Vendido..." value="{{ old('vendido', $bar->vendido) }}">
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <input class="btn btn-success"type="button" onclick="history.back()" name="Regresar" value="Regresar">
</div>