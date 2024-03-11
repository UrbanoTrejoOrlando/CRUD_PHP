<?php
  $servidor = "localhost";
  $usuario = "php";
  $baseDatos = "crud_php";
  $password = "conexion";

  //conectando a la base Datos
  $conexion = mysqli_connect($servidor,$usuario,$password,$baseDatos);
  if(!$conexion){
    echo "Problema al conecatar con la BD";
  }  

?>

