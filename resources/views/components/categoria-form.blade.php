@csrf	
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{ old('nombre', $categoria->nombre) }}">
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" class="form-control" placeholder="Descripción..." value="{{ old('descripcion', $categoria->descripcion) }}">
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <input class="btn btn-success"type="button" onclick="history.back()" name="Regresar" value="Regresar">
</div>