/*
    consulta almacenada en la base de datos que se utiliza como una tabla virtual
    no almacena datos, sino que se utiliza asociaciones y los datos originales
    de las tablas, de forma que siempre se mantiene actualizada
*/

CREATE VIEW entradas_con_nombres AS
SELECT
    e.id,
    e.titulo,
    u.nombre AS 'autor',
    c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;
/*ESTA QUERY MOSTRARA LOS RESULTADOS DE LA CONSULTA GUARDADA ANTERIORMENTE EN entradas_con_nombres*/
SELECT * FROM  entradas_con_nombres;

/*Para borrar vista*/
DROP VIEW entradas_con_nombres;
