/*
Listado de clientes atendidos por el vendedor David Lopez
*/

select * from clientes where vendedor_id in
(select id from vendedores where nombre LIKE 'david');


UPDATE clientes
Set vendedor_id=4 Where id=3;


UPDATE clientes
Set vendedor_id=4 Where id=5;

UPDATE clientes
Set vendedor_id=2 Where id=6;
