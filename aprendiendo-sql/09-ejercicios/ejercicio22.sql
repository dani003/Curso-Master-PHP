/*
OBTENER LISTADO DE CLIENTES (NUMERO DE CLIENTE Y EL NOMBRE),
MOSTRAR TMB EL NUMERO DE VENDEDOR Y SU NOMBRE
*/

SELECT cl.id, cl.nombre, ve.id, CONCAT(ve.nombre,' ',ve.apellidos)
FROM clientes cl, vendedores ve
WHERE cl.vendedor_id = ve.id;
