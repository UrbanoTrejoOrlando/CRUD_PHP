DROP PROCEDURE IF EXISTS proc_actualizar_persona;

DELIMITER //
CREATE PROCEDURE proc_actualizar_datos_persona(
	IN p_nombre VARCHAR(30),
	IN p_apellidoP VARCHAR(30),
	IN p_apellidoM VARCHAR(30),
	IN p_edad MEDIUMINT,
	IN p_fecha_nacimiento DATE,
	IN p_sexo VARCHAR(1)
)
BEGIN 
	UPDATE persona SET nombre = p_nombre,
		apellido_Paterno = p_apellidoP,
		apellido_Materno = p_apellidoM,
		edad = p_edad,
		fecha_Nacimiento= p_fecha_nacimiento,
		sexo = p_sexo
		WHERE nombre = p_nombre;
END //
DELIMITER ;


