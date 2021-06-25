# Curso-Master-PHP
Ejercicios del curso Mater PHP. 
PHP desde cero, bases de datos, SQL, MySQL, POO, MVC, Librerías, Laravel 5, 6 y 7, Symfony 4 y 5, WordPress +56h

## Pre-Requisitos 

* WAMP
_ Php 7.2
_ Apache 2.4
_ MySQL 5.7

## Secciones 

### Aprendiendo Php
Conceptos basicos de php. Desde hola mundo, hasta cookis, sesiones, autenticaciones etc.. Contiene ejercicios con enunciado

### Aprendiendo Sql
Conceptos basicos de Sql. Contiene ejercicios con enunciado

### Aprendiendo Php-Mysql
Conexion a base de datos mysql desde php

### Proyecto Php
Proyecto que consisten en un blog de videojuegos. Contiene menu de navegacion, barra lateral, login y registro. Las entradas del blog se pueden crear, editar y eliminar.

#### Conexion base de datos
La conexion a la base de datos en este proyecto se encuentra en el archivo includes/conexion.php. La base de datos fue creada de forma local a traves de phphMyAdmin con el nombre "blog_master", sus tablas son las siguientes:

| Taba | Descripcion | Campos |
| ------------- | ------------- |------------- |
| Usuarios  | Usuarios registrados en el blog  | id, nombre, apellidos, email, password, fecha   |
| Categorias  | Categorias de videojuegos  | id, nombre  |
| Entradas  | Entradas creadas por los usuarios para el blog  | id, usuario_id, categoria_id, titulo, descripcion, fecha  |
| Entradas_con_nombres  | Similar a la tabla entradas | id, titulo, autor, categoria  |

### Aprendiendo librerias-Php
### Aprendiento Php-poo
### Proyecto Php-poo
### Aprendiendo Laravel
### Proyecto Laravel
### Aprendiendo Symfony
### Proyecto Symfony
### Wordpress
