/*
Obtener listado con los encargos realizados por el
cliente 'Fruteria Antonia INC'
*/

select * from encargos where cliente_id in(
    select id from clientes where nombre like '%fruteria%'
)

select e.id, e.cantidad, cl.nombre, co.modelo, e.fecha from encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
where e.cliente_id in(
   select id from clientes where nombre like '%fruteria%'
)
group by cl.nombre, co.modelo ;
