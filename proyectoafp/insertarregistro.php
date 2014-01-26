<?php 
/* @var $rut type */
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
//$con=mysqli_connect("example.com","peter","abc123","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//mysqli_query($conn,"INSERT INTO Persons (FirstName, LastName, Age)VALUES ('Peter', 'Griffin',35)");
mysqli_query($conn,"INSERT INTO cliente (rut,nombres,apellidos,fecha_nacimiento,region_residencia,genero,afp,cartola,certificado) VALUES ('$rut','$nombres','$apellidos','$fecha_nacimiento','$region_residencia','$genero','$afp','$cartola','$certificado');");
//$guardar = mysql_query("INSERT INTO cliente (rut,nombres,apellidos,fecha_nacimiento,region_residencia,genero,afp,cartola,certificado) VALUES ('$rut','$nombres','$apellidos','$fecha_nacimiento','$region_residencia','$genero','$afp','$cartola','$certificado');"); 
mysqli_close($conn); 
?> 
<HTML> 
<HEAD> 
<TITLE>Producto</TITLE> 
</HEAD> 
<BODY> 
<h1><div align="center">Registro Insertado</div></h1> 
<div align="center"><a href="index.php">Ingresar otro registro</a></div> 
</BODY> 
</HTML> 