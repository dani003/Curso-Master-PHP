<?php
/*Conectar a la base de datos*/
$conexion = mysqli_connect( "localhost", "root", "", "phpmysql");

//comprobar que la conexion es correcta

if(mysqli_connect_errno()){
    echo "La conexion ha fallado: ".mysqli_connect_error();
}else{
    echo "conexion exitosa";
}



//consulta para configurar la codificacion de mb_substitute_character
mysqli_query($conexion, "SET NAME 'utf8'");

//consulta SELECT desde
$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
    var_dump($nota);
    echo $nota['titulo'].'<br/>';
    echo $nota['descripcion'].'<br/>';
}

//Inserttar en la base de datos desde php
$sql = "INSERT INTO notas VALUES(NULL, 'Nota desde PHP','Esta es una nota desde php', 'green')";

$insert = mysqli_query($conexion, $sql);

if ($insert){
    echo "Datos insertados correctamente";
}else {
    echo "Error: ".mysqli_error($conexion);
}

















?>
