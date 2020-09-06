<form action="{{ action('ProductosController@save') }}" method="POST">
    {{ csrf_field() }}

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"><br>

    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion"><br>

    <label for="precio">Precio</label>
    <input type="number" name="precio"><br>

    <input type="submit" value="Guardar">
</form>
