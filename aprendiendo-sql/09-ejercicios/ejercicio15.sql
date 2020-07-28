/*
Mostrar los 2 clientes con mayor numero de pedidos, y
mostrar los pedidos que ha hecho
*/

select cl.nombre, cl.id, COUNT(e.id)  from encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY cl.nombre
ORDER BY COUNT(e.id) DESC LIMIT 2;

INSERT INTO encargos VALUES (NULL, 4, 3, 3, CURDATE());

SELECT cliente_id, COUNT(id) FROM encargos
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;
