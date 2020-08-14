<h1>Listado de frutas</h1>
<h3><a href="{{ action('FrutaController@create')}}">Crear Fruta</a></h3>

@if(session('status'))
    <p style="background: green; color:white;">
        {{session('status')}}
    </p>
@endif

<ul>
    @foreach($frutas as $fruta)
        <li>
            <a href="{{action('FrutaController@detail', ['id' => $fruta->id]) }}"> <!--con ['id' => $fruta->id] se le pasa el id dinamico por la url-->
                {{$fruta->nombre}}
            </a>
        </li>
    @endforeach
</ul>
