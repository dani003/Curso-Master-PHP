CREATE DATABASE notas_master;
use notas_master;

CREATE TABLE usuarios(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(100) not null,
    email       varchar(255) not null,
    password    varchar(255) not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE notas(
    id              int(255) auto_increment not null,
    usuario_id      int(255) not null,
    titulo          varchar(255) not null,
    descripcion     MEDIUMTEXT,
    fecha           date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;
