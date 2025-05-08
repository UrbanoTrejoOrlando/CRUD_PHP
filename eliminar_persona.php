<?php
// Conexion a la base de datos
include("conexion/conexion.php");
// Recibe en una variable el resultado en nombre_persona
$nombre = $_GET['nombre_persona'];
// Impresion de la variable
echo $nombre;

# Llamada al procedure
$sql = "CALL proc_eliminar_persona('$nombre')";

if (mysqli_query($conexion,$sql)){
        header("location:consultar_personas.php");
} else {
   echo "Error al eliminar la base de datos";
} 
mysqli_close;
?>

