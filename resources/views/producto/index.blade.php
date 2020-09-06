<h1>Listado de Productos</h1>
<h3><a href="{{action('ProductosController@create')}}">Crear Producto</a></h3>
@if (session('status'))
    <p style="background: green; color:white">
        {{ session('status') }}
    </p>
@endif
<ul>
    @foreach ($productos as $producto)
        <li>
            {{$producto->nombre}}
        </li>
    @endforeach
</ul>
