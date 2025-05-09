<?php
  include("conexion/conexion.php");
  $nombre = $_POST['txtNombre'];
  $apellidoP = $_POST['txtApellidoP'];
  $apellidoM = $_POST['txtApellidoM'];
  $edad = $_POST['txtEdad'];
  // Recibe en una variable el resultado en txtFecha
  $fecha = $_POST['txtFecha'];
  // Recibe en una variable el resultado en cmbSexo
  $sexo = $_POST['cmbSexo'];

  // Impresion de las variables para verificar si se estan recibiendo los datos del formulario
  echo "$nombre | $apellidoP | $apellidoM | $edad | $fecha | $sexo ";

  // Llamda al procedimiento almacenado
  $sql = "CALL proc_insertar_persona('$nombre','$apellidoP','$apellidoM',$edad,'$fecha',$sexo);";
  if(mysqli_query($conexion,$sql)){
   # redireccionar a consultar personas
    header("location:consultar_personas.php");
    exit();
  }else{
    // Impresion del resultado por si es incorrecto
    echo "Problemas al registrar al usuario, verifique de nuevo: " . mysqli_error($conexion);
  }

?>

