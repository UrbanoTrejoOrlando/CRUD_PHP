CREATE DATABASE crud_php;
CREATE USER 'php'@'%' IDENTIFIED BY 'conexion';
--- Otorgrar los permisos al usuario sobre la base de datos
GRANT ALL PRIVILEGES ON crud_php.* TO 'php'@'%';
-- Guardar cambios 
FLUSH PRIVILEGES;

