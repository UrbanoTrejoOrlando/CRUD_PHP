<?php
// Variable indicando a que servidor apunta la conexion
$servidor = "localhost";
// Usuario de la base de datos
$usuario = "php";
// Base de datos a la que se conecta
$baseDatos = "crud_php";
$password = "conexion";

$conexion = mysqli_connect($servidor, $usuario, $password, $baseDatos);

if (!$conexion) {
    echo "Problema al conectar con la BD: " . mysqli_connect_error();
} else {
    echo "Conexión exitosa a la base de datos";
}
?>
