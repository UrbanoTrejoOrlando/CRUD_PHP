<?php
  include("conexion/conexion.php");
  $nombre = $_POST['txtNombre'];
  $apellidoP = $_POST['txtApellidoP'];
  $apellidoM = $_POST['txtApellidoM'];
  $edad = $_POST['txtEdad'];
  $fecha = $_POST['txtFecha'];
  $sexo = $_POST['cmbSexo'];

  echo "$nombre | $apellidoP | $apellidoM | $edad | $fecha | $sexo ";

  /* $sql = "CALL proc_insertar_persona('$nombre','$apellidoP','$apellidoM',$edad,'$fecha',$sexo);";
  /if(mysqli_query($conexion,$sql)){
   # redireccionar a consultar personas
    header("location:consultar_personas.php");
    exit();
  }else{
    // Impresion del resultado por si es incorrecto
    echo "Problemas al registrar al usuario, verifique de nuevo: " . mysqli_error($conexion);
  }
*/
?>

