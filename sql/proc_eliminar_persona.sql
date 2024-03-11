DELIMITER //
CREATE PROCEDURE proc_eliminar_persona(
	IN p_nombre VARCHAR(30)
)
BEGIN
	UPDATE persona SET estatus = '0'	
		WHERE nombre = p_nombre;
END //
DELIMITER ;
