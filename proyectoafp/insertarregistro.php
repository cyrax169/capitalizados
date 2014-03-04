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
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir Cartola</title>
         <?php
              include('header.php');
         ?>
    </head>
    
    <body>
        <div id="page-wrap">
            <div id="contenedor">  
                <?php
                include('menu.php');
                ?>
            </div>
            <CENTER>
                <br><br>
                <h2>Estás por completar tu registro</h2>
                <form name="subirCartola" action="procesaCertificado.php.php" method="POST" enctype="multipart/form-data">
                    <table border="1" heigh="200">
                        <tbody align="center">
                            <tr>
                                <td>Busca tu Certificado</td>
                                <td><input type="file" name="certificado" value="" width="20" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Subir Archivo" name="bSubir" /></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </CENTER>
        </div>    
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div> 
        
    </body>
    
</html>
