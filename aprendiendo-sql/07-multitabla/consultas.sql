/*
Consultas que sirven para consultar varias tabla es una sola sentencia
*/

/*MOSTRAR LAS ENTRADAS CON EL NOIMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA*/
SELECT e.titulo, u.nombre, c.nombre
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

/*INNER JOIN*/
SELECT
    e.id,
    e.titulo,
    u.nombre AS 'autor',
    c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;


/*Mostrar el nombre de las categorias y al lado cuantas entradas tienen*/
SELECT c.nombre, count(e.id) FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

/*INNER JOIN (mustra las coincidencias)*/
SELECT
    c.nombre,
    count(e.id)
FROM categorias c
INNER JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

/*LEFT JOIN (Muestra todas las filas de la izquierda, incluso si a la derecha no hay cincidencia)*/
SELECT
    c.nombre,
    count(e.id)
FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

/*RIGHT JOIN (Muestra todas las filas de la derecha, incluso si a la derecha no hay cincidencia)*/
SELECT
    c.nombre,
    count(e.id)
FROM categorias c
RIGHT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;


/*Mostrar el email de los usuarios y al lado cuantas entradas tienen*/
SELECT u.email, count(e.id)
FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;
