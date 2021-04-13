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