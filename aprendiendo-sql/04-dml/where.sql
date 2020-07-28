


select * from usuarios where email = 'daniela@gmail.com'

/*
Operadores de comparacion

entre       between
en          in
es nulo     is null
no es nulo  is not null
como        like
no es como  not like
*/

#Ejemplos#
/* mostrar nombre y apellidos de los usuarios registrados en 2020*/
SELECT nombre, apellidos FROM  usuarios WHERE fecha YEAR(fecha)=2019

/*MOSTRAR TODOS LOS USUARIOS QUE NO SE REGISTRARON EN 2020*/
SELECT nombre, apellidos FROM  usuarios WHERE fecha YEAR(fecha)!=2019 or ISNULL(fecha);

/*Operadores logicos
Y       and
O       or
NO      not
*/
/*
COMODINES
cualquier cantidad de caracteres:    %   ( ILIKE '%1234%')
un caracter desconocido:             _
*/

/*mostrar emaiol de los usuarios cuyo apellido contenga lalñetra a
y ademas que su contraseña sea 1234*/
SELECT email FROM usuarios WHERE apellidos ILIKE '%a%' and password ='1234';

/*sacar todos los registros de la table usuarios cuyo año sea par*/
select * FROM usuarios WHERE (YEAR(fecha)%2 =0)

/*sacar todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras y se haya registrado antes de 2020
y mostrar el nombre en mayuscula*/
SELECT UPPER(nombre), apellidos FROM usuarios WHERE LENGHT(nombre)>5 and YEAR(fecha)<2020;

/*para iordernar por campo*/
SELECT * FROM usuarios ORDER BY id DESC

/*Muestra una cantiodad n de datos de la tabla*/
SELECT * FROM usuairos LIMIT 2;























4
