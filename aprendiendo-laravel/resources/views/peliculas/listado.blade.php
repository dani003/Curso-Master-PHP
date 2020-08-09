@include('includes.header')
@include('includes.header')
@include('includes.header')

<!--IMPRIMIR POR PANTALLA-->
<h1>{{$titulo}}</h1>
<h2><?=$listado[1]?></h2>
<p>{!!date('y')!!}</p>

<!--COMENTARIOS-->

<!--Esto es un comentario html-->
<?php
//Esto es un comentario php
 ?>
{{--Esto es un comentario blade--}}

<!--SI EXISTE-->
<?= isset($director) ? $director : 'No hay director';?>

{{ $director ?? 'No hay director' }}

<!--CONDICIONALES-->
@if($titulo && count($listado) >= 1)
    <h1>EL titulo existe y es este : {{$titulo}} y elñ listado es mayor a 5</h1>
@elseif($titulo)
    <h1>El titulo existe, y el listado no es mayor a 2</h1>
@else
    <h1>La condicion no se ha cumplido</h1>
@endif

<!--BUCLES-->
@for($i=0; $i<=20; $i++)
    El numero es: {{$i}} <br/>
@endfor

<hr/>
<?php $contador = 1 ?>
@while($contador < 50)
    @if($contador % 2 == 0)
        Numero par: {{$contador}} <br/>
    @endif
    <?php $contador++;?>
@endwhile
<hr/>

@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach
@include('includes.footer')
