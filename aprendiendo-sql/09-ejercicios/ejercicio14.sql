/*
Visualizar las unidades totales de coches vendidas a cada cliente
mostrando el nombre del producto, el numero del cliente,y la suma de unidades
*/

select co.modelo AS 'CHOCHE', cl.nombre AS 'CLIENTE', SUM(e.cantidad)
AS 'UNIDADES' from encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON co.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;
