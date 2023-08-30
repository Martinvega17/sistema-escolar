@csrf	
<div class="form-group">
    <label for="nombres">Nombres</label>
    <input type="text" name="nombres" class="form-control" placeholder="Nombres..." value="{{ old('huesped', $huesped->nombres) }}">
</div>
<div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="text" name="cedula" class="form-control" placeholder="Cedula..." value="{{ old('titulo', $huesped->cedula) }}">
</div>
<div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" class="form-control" placeholder="Direccion..." value="{{ old('titulo', $huesped->direccion) }}">
</div>
<div class="form-group">
    <label for="celular">Celular</label>
    <input type="text" name="celular" class="form-control" placeholder="Celular..." value="{{ old('titulo', $huesped->celular) }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email..." value="{{ old('titulo', $huesped->email) }}">
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <input class="btn btn-success"type="button" onclick="history.back()" name="Regresar" value="Regresar">
</div>