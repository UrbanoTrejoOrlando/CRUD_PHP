<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CRUD EN PHP</title>
   <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
#conexion con la base de datos
include("conexion/conexion.php");
# recibimos comom paramatro el nombre de la persona
$persona = $_GET['nombre_persona'];

#Consulta 
$sql = "CALL proc_mostrar_persona('$persona')";
$ejecConsulta = mysqli_query($conexion, $sql);

if(mysqli_num_rows($ejecConsulta) > 0) {
    $conPersona = mysqli_fetch_array($ejecConsulta);
?>
   <h2 id="titulo"> Actualizar Datos </h2>
   <form id="formRegistro" class="formulario" action="actualizarbd-persona.php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" placeholder="Nombre:" name="txtNombre" value="<?php echo $conPersona['nombre']; ?>" required>

      <br>
      <label for="apellido1">Apellido Paterno:</label>
      <input type="text" id="ap_P" placeholder="Apellido Paterno:" name="txtApellidoP" value="<?php echo $conPersona['apellido_Paterno']; ?>" required>

      <br>
      <label for="apellido2">Apellido Materno:</label>
      <input type="text" id="ap_M" placeholder="Apellido Materno:" name="txtApellidoM" value="<?php echo $conPersona['apellido_Materno']; ?>" required>

      <br>
      <label for="edad">Edad:</label>
      <input type="text" id="edad" placeholder="Edad:" name="txtEdad" value="<?php echo $conPersona['edad']; ?>" required>

      <br>
      <label for="nacimiento">Fecha Nacimiento</label>
      <input type="date" id="fecha" placeholder="Fecha Nacimiento:" name="txtFecha" value="<?php echo $conPersona['fecha_Nacimiento']; ?>" required>

      <br>
      <label for="sexo">Sexo: </label>
      <select id="tipo" name="cmbSexo">
         <option <?php if($conPersona['sexo'] == '') echo 'selected'; ?> disabled>--Selecciona--</option>
         <option value="1" <?php if($conPersona['sexo'] == '1') echo 'selected'; ?>>Masculino</option>
         <option value="2" <?php if($conPersona['sexo'] == '2') echo 'selected'; ?>>Femenino</option>
      </select>
      <div class="registro">
         <button type="submit" class="btn_calcular">Actualizar</button>
      </div>
   </form>

   <?php
} else {
   echo "<p>No se encontraron datos para el nombre proporcionado.</p>";
}
?>
</body>
</html>

