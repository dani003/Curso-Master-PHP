#mostrar todos los registros de una tabla#
select * from usuarios;

#mostrar algunos registros de una tabla#
select nombre, apellidos from usuarios;

#mostrar ordenado#
select * from usuarios order by nombre desc;

#funciones matematicas#
select ABS(7) AS 'OPERACION' FROM usuarios;
select rand() AS 'OPERACION' FROM usuarios;
select round(7.91, 2) AS 'OPERACION' FROM usuarios;

#mostrar en mayuscula#
SELECT UPPER(nombre) from usuarios;

#concatenar + MAYUSCULA#
SELECT UPPER(CONCAT (nombre, ' ',apellidos )) from usuarios;

#LONGITUD DE LA CADENA DE CARACTERES#
SELECT LENGTH(nombre) from usuarios;

#saca espacios vacios#
SELECT TRIM(CONCAT (nombre, ' ',apellidos, '      ') * FROM usuarios;

#fecha actual#
select CURDATE() from usuarios;

#DIFERENCIA EN DIA, DE FECHAS#
SELECT DATEDIFF(fecha, CURDATE()) from usuarios;

#Nombre del dia#
select DAYNAME(fecha) from usuarios;

#DIA DEL MES #
select DAYOFMONTH(fecha) from usuarios;

#dia de la semana#
select DAYOFWEEK(fecha) from usuarios;

#dia del año#
select DAYOFYEAR(fecha) from usuarios;

#mes#
select MONTH(fecha) from usuarios;

#hora#
select HOUR(fecha) from usuarios;

#fECHA ACTUAL#
select CURTIME() from usuarios;

#Fecha del sistema#
SELECT SYSDATE() AS 'Fecha actual' from usuarios;

#para dar formato a la fecha#
DATEFORM();

#Muestra con 0 o 1 si es null o no#
SELECT ISNULL(apellidos) from usuarios;

#Comparar iguales#
SELECT STRCMP('HOLA', 'HOLA') from usuarios;

#Version de sqlñ que uso#
SELECT VERSION() FROM usuarios;

#usaurio sql#
SELECT USER() DISTINT FROM usuarios;

#si son muchos registros, muestra solo uno si estos se repiten#
SELECT USER() DISTINT FROM usuarios;

#Si esta vacio#
SELECT IFNULL(apellido, 'este campo esta vacio') from usuarios;
