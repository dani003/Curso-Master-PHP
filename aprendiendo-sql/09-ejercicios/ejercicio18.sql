/*
Listar los clientes que han hecho un encargo del coche mercedes ranchera
*/

select * from clientes where id in (
    select cliente_id from encargos where coche_id in (
        select id from coches where modelo like '%ranchera%'
    )
);
