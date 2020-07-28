/*
Obtener los vendedores con dos o mas clientes
*/
select * from vendedores where id in (
    select vendedor_id from clientes GROUP BY vendedor_id
    HAVING COUNT(id) >=2
);
