<h1>{{$titulo}}</h1>
<p>(accion index controllador PeliculasController)</p>

@if(isset($pagina))
    <h3>La pagina es: {{$pagina}}</h3>
@endif

<a href="{{action('PeliculaController@detalle')}}">Ir al Detalle (con action)</a>
<br/>
<a href="{{route('detalle.pelicula', ['id' =>22])}}">Ir al Detalle (con route y con parametro id)</a>
<br/>
<a href="{{route('detalle.pelicula')}}">Ir al Detalle (con route)</a>
