<h1>{{$producto->nombre}}</h1>
<p>
    {{$producto->descripcion}}
</p>
<a href="{{action('ProductosController@delete', ['id'=>$producto->id])}}">Eliminar</a>
