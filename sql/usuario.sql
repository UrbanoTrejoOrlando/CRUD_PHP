CREATE DATABASE crud_php;
CREATE USER 'php'@'%' IDENTIFIED BY 'conexion';
GRANT ALL PRIVILEGES ON crud_php.* TO 'php'@'%';
-- Guardar cambios 
FLUSH PRIVILEGES;

