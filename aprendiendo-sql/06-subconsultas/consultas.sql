/*
SUBCONSULTAS
    _son consultas que se ejecutan dentro de otras
    _consiste en utilizar los resultados de la subconsulta para
    operar en la consulta principal
    _jugando con las claves ajenas / foraneas
*/

select * from usuarios where id in (select usuario_id from entradas);

select * from usuarios where id not in (select usuario_id from entradas);

SELECT nombre FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%gta%");

/*sacar todas las entradas de la categoria accion*/
SELECT titulo FROM entradas WHERE categoria_id IN
(SELECT id FROM categorias WHERE nombre ='Accion');


/*MOSTRAR LAS CATEGORIAS CON MAS DE 3 ENTRADAS*/
SELECT nombre FROM categorias WHERE
id IN
(SELECT categoria_id FROM entradas GROUP BY categoria_id
HAVING COUNT(categoria_id) >=3);

/*MOSTRAR LOS USUARIOS QUE SE CREARON UN MARTES*/
SELECT * FROM usuarios where id IN
(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) =4);

/*MOSTRAR EL NOMBRE DEL USUARIO QUE TENGA MAS ENTRADAS*/
SELECT nombre FROM usuarios WHERE id =
(SELECT COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

/*MOSTRAR LAS CATEGORIAS SIN ENTRADAS*/
SELECT * FROM categorias WHERE id NOT IN(
    SELECT categoria_id FROM entradas);
