<?php 
$rut=$_POST['rut']; 
$nombre1=$_POST['nombre1']; 
$nombre2=$_POST['nombre2'];
$apellido1=$_POST['apellido1']; 
$apellido2=$_POST['apellido2'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$region_residencia=$_POST['region_residencia'];
$genero=$_POST['genero'];
$afp=$_POST['afp'];
$cartola=$_POST['cartola'];
$certificado=$_POST['certificado'];
$nombres=$nombre1 .' '. $nombre2;
$apellidos=$apellido1 .' '. $apellido2;
echo $rut,$nombres,$apellidos,$fecha_nacimiento,$region_residencia,$genero,$afp,$cartola,$certificado;

include "conexion.php"; 
$conn = dbConnect();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($conn,"INSERT INTO cliente (rut,nombres,apellidos,fecha_nacimiento,region_residencia,genero,afp,cartola,certificado) VALUES ('$rut','$nombres','$apellidos','$fecha_nacimiento','$region_residencia','$genero','$afp','$cartola','$certificado');");
mysqli_close($conn); 
?> 
<HTML> 
<HEAD> 
<TITLE>Registrado</TITLE> 
</HEAD> 
<BODY> 
<h1><div align="center">Su registro se ha realizado con éxito</div></h1> 
<div align="center"><a href="index.php">Volver al inicio</a></div> 
</BODY> 
</HTML> 