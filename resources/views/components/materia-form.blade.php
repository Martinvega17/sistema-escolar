@csrf	
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombre de la Materia..." value="{{ old('nombre', $materia->nombre) }}">
</div>
<div class="form-group">
    <label for="codigo">Codigo</label>
    <input type="number" name="codigo" class="form-control" placeholder="codigo..." value="{{ old('codigo', $materia->codigo) }}">
</div>
<div class="form-group">
    <label for="creditos">Creditos</label>
    <input type="number" name="creditos" class="form-control" placeholder="Creditos..." value="{{ old('creditos', $materia->creditos) }}">
</div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" placeholder="Descripcion..." value="{{ old('descripcion', $materia->descripcion) }}">
</div>

<div class="form-group">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <input class="btn btn-success"type="button" onclick="history.back()" name="Regresar" value="Regresar">
</div>