/*
Obtener lista de los nombre de los clientes con los
importes de sus encargos acumulado
*/

select cl.nombre, cl.gastado from clientes cl
INNER JOIN encargos en ON cl.id = en.cliente_id
INNER JOIN coches co ON en.coche_id = co.id;
