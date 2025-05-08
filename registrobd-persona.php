<?php
  //Conexion a la base de datos
  include("conexion/conexion.php");
  // Recibe en una variable el resultado en txtNombre
  $nombre = $_POST['txtNombre'];
  // Recibe en una variable el resultado en txtApellidoP
  $apellidoP = $_POST['txtApellidoP'];
  // Recibe en una variable el resultado en txtApellidoM
  $apellidoM = $_POST['txtApellidoM'];
  // Recibe en una variable el resultado en txtEdad
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
    echo "Problemas al registrar al usuario, verifique de nuevo: " . mysqli_error($conexion);
  }

?>

