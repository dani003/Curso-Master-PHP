/*
Sacar vendedores que tienen jefe y sacar el jefe
*/

select v1.nombre AS 'vendedor', v2.nombre AS 'jefe' from vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;

/*
Con concat se puede mostrar el nombre completo
*/
