/*
Visualizar el nombre y apellidos de los vendedores den una misma columna
y su fecha de registro, y que dia de la semana era cuando se registrron
*/

SELECT CONCAT(nombre,' ' ,apellidos) as 'nombre', fecha_alta, DAYNAME(fecha_alta) FROM vendedores;
