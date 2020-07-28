#Insertar nuevos registros#

INSERT INTO usuarios VALUES(null, 'daniela', 'ramirez aravena','daniela@gamil.com','naruto', '2020-04-23');

INSERT INTO usuarios VALUES(null, 'martin', 'ramirez aravena','martin@gamil.com','qwe', '2020-04-23');

INSERT INTO usuarios VALUES(null, 'ariel', 'Silva bastidas','ariel@gamil.com','fdsnaruto', '2020-04-23');

#insertar filas solo con ciertas columnas#
INSERT INTO usuarios (email, password)
VALUES('hola', 'hola@mail.com');
