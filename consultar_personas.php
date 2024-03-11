<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD EN PHP</title>
	<link rel="stylesheet" href="css/styles_tablas.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/diseño_tabla.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
 <table class="table">
  <thead>
    <tr>
		<h2 class="titulo"> Personas </h2>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Edad</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Sexo</th>
      <th scope="col">Editar</th>
      <th  scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
      <?php
        #conectar con el servidor de BD
        include("conexion/conexion.php");
        #preparar la consulta
        $sql="CALL proc_mostrar_personas()";

      #ejecutar consulta
      $ejecConsulta = mysqli_query($conexion,$sql);
      #obtener los datos de la consulta
      while($regPersona = mysqli_fetch_array($ejecConsulta)){
		echo "<tr>
		<th scope='row'>" . $regPersona[0] . "</th>
    	<td>" . $regPersona[1] . "</td>
    	<td>" . $regPersona[2] . "</td>
    	<td>" . $regPersona[3] . "</td>
    	<td>" . $regPersona[4] . "</td>
    	<td>" . $regPersona[5] . "</td>
		<td>" . "<a href='actualizar_persona.php?nombre_persona=$regPersona[0]'><i class='fas fa-edit'></i></a>" . "</td> .
		<td>" . "<a href='eliminar_persona.php?nombre_persona=$regPersona[0]'><i class='fas fa-trash-alt'></i></a>" . "</td> .
		</tr>";
      }
?>
	</tbody>
	</table>
	<form class="boton" action="registro-persona.html" method="post"> 
   	<button type="submit" class="btn_registro">Registrar</button>
   </form>  


</html>
