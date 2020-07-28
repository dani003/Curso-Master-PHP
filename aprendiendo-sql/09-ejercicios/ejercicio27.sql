/*
Visualizar el nombre de los clientes y la cantidad de encargos realizados,
incluyendo los que no hayan realizado encargos
*/


INSERT INTO clientes VALUES(null, 5, 'Tienda Organica Inc', 'Murcia', 0, CURDATE());

select cl.nombre, COUNT(e.id) from clientes CL
LEFT JOIN encargos e ON cl.id = e.cliente_id
GROUP BY cl.nombre;
