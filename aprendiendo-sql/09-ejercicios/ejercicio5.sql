/*
Listar todos los vendedores, mostrar su nombre y los dias que llevan
en el concesionario
*/

SELECT nombre, DATEDIFF(CURDATE(), fecha_alta) AS 'dias' from vendedores;
