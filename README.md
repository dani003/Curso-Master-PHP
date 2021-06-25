# Curso-Master-PHP
Ejercicios del curso Mater PHP. 
PHP desde cero, bases de datos, SQL, MySQL, POO, MVC, Librerías, Laravel 5, 6 y 7, Symfony 4 y 5, WordPress +56h

## Pre-Requisitos 

* WAMP
- Php 7.2
- Apache 2.4
- MySQL 5.7

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
Se muestran cuatro librerias basicas de php (para el uso de estas librerias es necesario el uso de composer)

* Depurar
* Generar pdf (spipu/html2pdf)
* Manipular imagenes (masterexploder/phpthumb)
* Paginacion (stefangabos/zebra_pagination)

### Aprendiento Php-poo
Conceptos basicos de programacion orientada a objetos (clases, herencia, etc...)

### Proyecto Php-poo

Proyecto de una tienda de camisetas. Se utiliza MVC.

### Aprendiendo Laravel

#### evn.local 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fruteria_master
DB_USERNAME=root
DB_PASSWORD=null

```
#### Base de datos

| Taba | Campos |
| ------------- |------------- |
| Usuarios  | id, nombre, precio, descripcion, fecha   |
| Frutas  | id, nombre, email, password  |


### Proyecto Laravel
### Aprendiendo Symfony
### Proyecto Symfony
### Wordpress
