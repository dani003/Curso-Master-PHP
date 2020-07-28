/*
Visualizar todos los coches en cuya marca exista la letra A
y/O que cuyo modelo empiezen por F
*/

select * from coches where marca LIKE '%a%' OR modelo LIKE 'F%';
