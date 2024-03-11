DELIMITER // 
CREATE PROCEDURE proc_mostrar_personas()
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
      FROM persona WHERE persona.estatus ='1';
END // 
DELIMITER ;

CALL proc_mostrar_personas();

