/*
visualizar los cargos de los vendedores y el numero de vendedores que estan
 dentro de ese cargo
*/

select cargo, count(id) from vendedores GROUP BY cargo;
