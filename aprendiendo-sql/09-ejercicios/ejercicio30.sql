/*
Mostrar los datos del vendedor con mas antiguedad en el consecionario
*/

select * from vendedores order by fecha_alta asc limit 1;

/*
Obtener los datos de los coches con mas unidades vendidas
*/

select * from coches where id in (
    select coche_id from encargos where cantidad = (
        select MAX(cantidad) from encargos
    )
);
