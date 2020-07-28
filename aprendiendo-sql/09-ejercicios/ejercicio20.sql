/*
Seleccionar el grupo en el trabaja el vendedor con mayor
salario, y mostrar el nombre del grupo
*/

Select * from grupos where id in (
    select grupo_id from vendedores where sueldo = (
        select MAX(sueldo) from vendedores
    )
);
