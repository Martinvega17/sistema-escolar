@csrf	
<div class="form-group">
    <label for="titulo">Nombre</label>
    <input type="text" name="titulo" class="form-control" placeholder="Nombre del Hotel..." value="{{ old('titulo', $hotel->titulo) }}">
</div>
<div class="form-group">
    <label for="rfc">RFC</label>
    <input type="text" name="rfc" class="form-control" placeholder="rfc..." value="{{ old('rfc', $hotel->rfc) }}">
</div>
<div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" class="form-control" placeholder="direccion..." value="{{ old('direccion', $hotel->direccion) }}">
</div>
<div class="form-group">
    <label for="celular">Celular</label>
    <input type="tel" name="celular" class="form-control" placeholder="celular..." value="{{ old('celular', $hotel->celular) }}">
</div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" placeholder="descripcion..." value="{{ old('descripcion', $hotel->descripcion) }}">
</div>
<div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen" class="form-control" placeholder="imagen..." value="{{ old('imagen', $hotel->imagen) }}">
</div>
<div class="form-group">
    <label for="apertura">Apertura</label>
    <input type="time" name="apertura" class="form-control" placeholder="apertura..." value="{{ old('apertura', $hotel->apertura) }}">
</div>
<div class="form-group">
    <label for="cierre">Cierre</label>
    <input type="time" name="cierre" class="form-control" placeholder="cierre..." value="{{ old('cierrw', $hotel->cierre) }}">
</div>
<div class="form-group">
    <label for="url_facebook">url facebook</label>
    <input type="url" name="url_facebook" class="form-control" placeholder="url facebook..." value="{{ old('url_facebook', $hotel->url_facebook) }}">
</div>
<div class="form-group">
    <label for="url_whatsapp">url whatsapp</label>
    <input type="url" name="url_whatsapp" class="form-control" placeholder="url whatsapp..." value="{{ old('url_whatsapp', $hotel->url_whatsapp) }}">
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <input class="btn btn-success"type="button" onclick="history.back()" name="Regresar" value="Regresar">
</div>