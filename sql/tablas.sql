--- Creacion de la tabla persona
CREATE TABLE persona (
	id_persona MEDIUMINT AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellido_Paterno VARCHAR(30) NOT NULL,
	apellido_Materno VARCHAR(30) NOT NULL,
	edad MEDIUMINT NOT NULL,
	fecha_Nacimiento DATE NOT NULL,
	sexo BINARY NOT NULL,
	estatus CHAR(1) DEFAULT '1' NOT NULL,
	PRIMARY KEY(id_persona)
);
