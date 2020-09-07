@if (isset($producto) && is_object($producto))
    <h1>Editar Producto</h1>
@else
    <h1>Crear Producto</h1>
@endif
<form action="{{ isset($producto) ? action('ProductosController@update') : action('ProductosController@save') }}" method="POST">
    {{ csrf_field() }}

    @if (isset($producto) && is_object($producto))
        <input type="hidden" name="id" value="{{$producto->id}}">
    @endif

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{$producto->nombre ?? ''}}"><br>

    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" value="{{$producto->descripcion ?? ''}}"><br>

    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{$producto->precio ?? 0}}"><br>

    <input type="submit" value="Guardar">
</form>
