DELIMITER //
CREATE PROCEDURE proc_insertar_persona (
	IN p_nombre VARCHAR(30),
	IN p_apellidop VARCHAR(30),
	IN p_apellidom VARCHAR(30),
	IN p_edad MEDIUMINT,
	IN p_fecha_nacimiento DATE,
	IN p_sexo BINARY
)
BEGIN
	INSERT INTO persona (nombre, apellido_Paterno, apellido_Materno, edad, fecha_Nacimiento, sexo)
	VALUES (p_nombre, p_apellidop, p_apellidom, p_edad, p_fecha_nacimiento, p_sexo);
END //
DELIMITER ;

CALL proc_insertar_persona ('Orlando','Urbano', 'Trejo', '20', '2003-07-17','1');
CALL proc_insertar_persona ('Ernesto','Archundia', 'Montiel', '20', '2003-12-24','1');

