/*
Visualizar los apellidos de los vendedores, su fecha y su numero de grupo
ordernados por fecha_alta desc y deben mostrarse los 4 ultimos vendores registrados
*/

select apellidos, fecha_alta, grupo_id from vendedores order by fecha_alta desc limit 4;
