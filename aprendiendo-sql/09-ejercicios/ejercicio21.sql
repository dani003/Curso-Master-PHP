/*
Obtener los nombres y ciudades de los clientes con encargos
de 3 o mas unidades
*/

select nombre, ciudad from clientes where id in (
    select cliente_id from encargos where cantidad>=3
);
