<?php
$servidor = "localhost";
$usuario = "php";
// Base de datos a la que se conecta
$baseDatos = "crud_php";
// Contraseña perteneciente al usuario
$password = "conexion";

// Conectar todas las variables con mysql
$conexion = mysqli_connect($servidor, $usuario, $password, $baseDatos);
// Validaciones
if (!$conexion) {
    // Enviar un mensaje si falla la conexion
    echo "Problema al conectar con la BD: " . mysqli_connect_error();
} else {
    // Mandar un mensaje si la conxion fue exitosa
    echo "Conexión exitosa a la base de datos";
}
?>
