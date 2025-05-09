<?php
$servidor = "localhost";
$usuario = "php";
$baseDatos = "crud_php";
$password = "conexion";

$conexion = mysqli_connect($servidor, $usuario, $password, $baseDatos);
if (!$conexion) {
    echo "Problema al conectar con la BD: " . mysqli_connect_error();
} else {
}
?>
