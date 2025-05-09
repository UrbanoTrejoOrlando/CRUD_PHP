<?php
include("conexion/conexion.php");
$nombre = $_GET['nombre_persona'];
echo $nombre;

$sql = "CALL proc_eliminar_persona('$nombre')";

// Verificar si la conexion es correcta
if (mysqli_query($conexion,$sql)){
        header("location:consultar_personas.php");
} else {
   echo "Error al eliminar la base de datos";
} 
mysqli_close;
?>

