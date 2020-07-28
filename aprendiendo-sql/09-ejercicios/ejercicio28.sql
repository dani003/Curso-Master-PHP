/*
Listar los vendedores y el numero de cliente que tiene.
Se deben mostrar tengan o no clientes
*/

select  ve.nombre, ve.apellidos, COUNT(cl.id) from vendedores ve
LEFT JOIN clientes cl ON cl.vendedor_id  = ve.id
GROUP BY ve.nombre, ve.apellidos;
