<?php
    //Operadores aritmeticos
    $num1 = 55;
    $num2 = 33;

    echo 'suma:'.($num1 + $num2).'<br>';
    echo 'resta:'.($num1 - $num2).'<br>';
    echo 'multiplicacion:'.($num1 + $num2).'<br>';
    echo 'division:'.($num1 / $num2).'<br>';
    echo 'resto:'.($num1 % $num2).'<br>';

    //Operadores de incremento y decremento
    $anio = 2020;
    echo '<h1>'.$anio.'<br>';
    $anio++;
    echo '<h1>'.$anio.'<br>';
    $anio--;
    echo '<h1>'.$anio.'<br>';
    ++$anio;
    echo '<h1>'.$anio.'<br>';
    --$anio;
    echo '<h1>'.$anio.'<br>';

    //Operadoresd e asignacion
    $edad = 55;

    echo $edad.'<br>';
    echo ($edad+=5).'<br>';
    echo ($edad-=10).'<br>';
    echo ($edad*=2).'<br>';
    echo ($edad/=5).'<br>';

 ?>
