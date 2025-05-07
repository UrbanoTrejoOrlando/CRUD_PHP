-- Creacion de la base de datos
CREATE DATABASE crud_php;
-- Creacion de un usuario
CREATE USER 'php'@'%' IDENTIFIED BY 'conexion';
--- Otorgrar los permisos al usuario sobre la base de datos
GRANT ALL PRIVILEGES ON crud_php.* TO 'php'@'%';
-- Guardar cambios 
FLUSH PRIVILEGES;

