-- Creacion de la base de datos
CREATE DATABASE crud_php;
-- Creacion de un usuario
CREATE USER 'php'@'%' IDENTIFIED BY 'conexion';
GRANT ALL PRIVILEGES ON crud_php.* TO 'php'@'%';
FLUSH PRIVILEGES;

