CREATE DATABASE IF NOT EXISTS symfony_master;
USE symfonmy_master;

CREATE TABLE IF NOT EXISTS users(
    id          int(255) auto_increment not null,
    role        varchar(50),
    name        varchar(100),
    surname     varchar(50),
    email       varchar(50),
    password    varchar(50),
    created_at  datetime,
    CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Daniela', 'Ramirez', 'daniela@gmail.com', 'password', CURTIME());
INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Esmeralda', 'Silva', 'Esme@gmail.com', 'password', CURTIME());
INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Ariel', 'Silva', 'Ariel@gmail.com', 'password', CURTIME());

CREATE TABLE IF NOT EXISTS tasks(
    id          int(255) auto_increment not null,
    user_id     int(255) not null,
    title       varchar(255),
    content     text,
    priority    varchar(20),
    hours       int(100),
    created_at  datetime,
    CONSTRAINT pk_tasks PRIMARY KEY(id),
    CONSTRAINT fk_task_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

INSERT INTO tasks VALUES(NULL, 1,'Tarea 1', 'Contenido de prueba 1', 'high', 40, CURTIME());
INSERT INTO tasks VALUES(NULL, 2,'Tarea 2', 'Contenido de prueba 2', 'high', 45, CURTIME());
INSERT INTO tasks VALUES(NULL, 1,'Tarea 3', 'Contenido de prueba 3', 'high', 60, CURTIME());