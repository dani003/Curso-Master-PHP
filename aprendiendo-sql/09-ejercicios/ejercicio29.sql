/*
Crear una vista llamada vendedores A, que incluira todos los vendedores del grupo,
que se llamen vendedores A
*/

CREATE VIEW vendedoresA AS
SELECT * FROM vendedores where grupo_id IN (
    SELECT id FROM grupos WHERE nombre like '%Vendedores A%'
);
