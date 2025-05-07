-- Verificar si el procedure existe
DROP PROCEDURE IF EXISTS proc_mostrar_persona;

DELIMITER //
CREATE PROCEDURE proc_mostrar_persona (
	IN p_nombre VARCHAR(30)
)
BEGIN 
	SELECT
		nombre,
		apellido_Paterno,
		apellido_Materno,
		edad,
		fecha_Nacimiento,
		CASE sexo
			WHEN 1 THEN 'Masculino'
				ELSE 'Femenino'  
		END AS 'Sexo'
	FROM persona WHERE nombre = p_nombre;
END //
DELIMITER ;

CALL proc_mostrar_persona('Ernesto');
