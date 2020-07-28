/*CONSULTAS DE AGRUPAMIENTO*/
SELECT titulo FROM entradas GROUP BY categoria_id;

SELECT COUNT(titulo) , categoria_ FROM entradas GROUP BY categoria_id;

/*CONSULTAS DE AGRUPAMIENTO CON CONDICIONES*/
SELECT COUNT(titulo) , categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=4;

/*
    AVG         sacar la media
    COUNT       contar el numero de elementos
    MAX         valor maximop del grupo
    MIN         valor minimo del grupo
    SUM         sumar todo el contedino del grupo
*/

SELECT AVG(id) AS 'media de entradas' from entradas;
SELECT MAX(id) AS 'maximo id', titulo from entradas;
SELECT MIN(id) AS 'maximo id', titulo from entradas;
SELECT SUM(id) AS 'suma ids', titulo from entradas;
