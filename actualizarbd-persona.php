<?php
  include("conexion/conexion.php");
  $nombre = $_POST['txtNombre'];
  $apellidoP = $_POST['txtApellidoP'];
  $apellidoM = $_POST['txtApellidoM'];
  $edad = $_POST['txtEdad'];
  $fecha = $_POST['txtFecha'];
  $sexo = $_POST['cmbSexo'];

  echo "$nombre | $apellidoP | $apellidoM | $edad | $fecha | $sexo ";

  $sql = "CALL proc_actualizar_datos_persona('$nombre','$apellidoP','$apellidoM',$edad,'$fecha',$sexo);";
  if(mysqli_query($conexion,$sql)){
   # redireccionar a consultar personas
    header("location:consultar_personas.php");
    exit();
  }else{
    echo "Problemas al registrar el animal, verifique de nuevo: " . mysqli_error($conexion);
  }

?>

