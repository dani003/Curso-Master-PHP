/*

Tipos de datos:
int                     ENTERO
integer (n° cifras)     ENTERO
varchar (n° caracteres) STRING
char (n° caracteres)    STRING
float (n° decimales)    DECIMAL
date, time, timestamp

TEXT (65535 caracteres)
MEDIUMTEXT (16 millones de caracteres)
LONGTEXT (4 billones de caracteres)

*/
/*
Crear tabla
*/

CREATE TABLE usuarios(
    id          int(11) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(255) default 'valor por defecto',
    email       varchar(100) not null,
    password    varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
