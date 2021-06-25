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

Proyecto en laravel que consiste en una replica simple de instagram.

#### evn.local 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_master
DB_USERNAME=root
DB_PASSWORD=null
```

#### Base de datos

| Taba | Campos |
| ------------- |------------- |
| comments  | id, user_id, image_id, content, created_at, updated_at   |
| images  | id, user_id, image_path, description, created_at, updated_at   |
| likes  | id, user_id, image_id, created_at, updated_at   |
| users  | id, role, name, surname, nick, email, password, image, created_at, updated_at, remember_token |

### Aprendiendo Symfony
Conceptos basicos de symfony a traves de un proyecto en el que se crean, editan y eliminan animales de l base de datos a traves de la url.

#### env.local
```
DATABASE_URL="mysql://root@127.0.0.1:3306/aprendiendo-sf4"
```
#### Base de datos

| Taba | Campos |
| ------------- |------------- |
| animales  | id, tipo, color, raza   |
| usuarios  | id, nombre, apellidos, email, password  |

#### Endpoints

Url base: http://localhost:8080/master-php/aprendiendo-symfony/public

Inicio
```
/inicio
```
Eliminar animal a traves del id
```
/animal/delete/{id}
```
Listar animales
```
/animal/index
```
Traer animal a traves de su id
```
/animal/{id}
```
Crear animal
```
/crear-animal/
```
El animal seleccionado con el id se actualiza a los valores harcodeados
```
/animal/update/{id}
```

### Proyecto Symfony
Proyecto que consiste en un CRUD de tareas

#### env.local
```
DATABASE_URL=mysql://root@127.0.0.1:3306/symfony_master
```
#### Base de datos

| Taba | Campos |
| ------------- |------------- |
| tasks  | id, user_id, title, content, priority, hours, created_at   |
| users  | id, role, name, surname, email, password, created_at  |


### Wordpress
