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
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$tipo_cliente=$_POST['tipo_cliente'];
$nombres=$nombre1 .' '. $nombre2;
$apellidos=$apellido1 .' '. $apellido2;
$licencia = $_POST['licencia'];
//echo $tipo_cliente,$email,$rut,$telefono,$nombres,$apellidos,$fecha_nacimiento,$region_residencia,$genero,$afp,$cartola,$certificado;

include "conexion.php"; 
$conn = dbConnect();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($conn,"INSERT INTO cliente (rut,nombres,apellidos,fecha_nacimiento,region_residencia,tipo_cliente,email,telefono,genero,afp,cartola,certificado) VALUES ('$rut','$nombres','$apellidos','$fecha_nacimiento','$region_residencia','$tipo_cliente','$email',$telefono,'$genero','$afp','$cartola','$certificado');");
mysqli_close($conn); 

?> 
<HTML> 
<HEAD> 
<TITLE>Continuar con el Registro</TITLE> 
</HEAD> 
<BODY> 
<h1><div align="center">Su registro se ha realizado con éxito</div></h1> 
<div align="center"><a href="index.php">Volver al inicio</a></div> 
</BODY> 
</HTML> 