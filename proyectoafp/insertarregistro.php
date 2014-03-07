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
@session_start();
$_SESSION['usuariorut']=$rut;
include "conexion.php"; 
$conn = dbConnect();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($conn,"INSERT INTO cliente (rut,nombres,apellidos,fecha_nacimiento,edad,region_residencia,tipo_cliente,email,telefono,genero,afp,cartola,certificado) VALUES ('$rut','$nombres','$apellidos','$fecha_nacimiento',0,'$region_residencia','$tipo_cliente','$email',$telefono,'$genero','$afp','1','1');");
mysqli_close($conn); 

?> 


<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir Cartola</title>
         <?php
              echo '<script type="text/javascript">';
              include('js/validadorPDF.js');
              echo '</script>';
              include('header.php');
         ?>
    </head>
    
    <body>
        <div id="page-wrap">
            <div id="contenedor">  
                <?php
                include('usuarios/menuCertificado.php');
                ?>
            </div>
            <CENTER>
                <br><br>
                <br><br>
                <h2>Estás por completar tu registro</h2>
                <form name="subirCartola" action="procesaCertificado.php" method="POST" enctype="multipart/form-data" onsubmit="return comprueba_extension(this, this.certificado.value)">
                    <table border="1" >
                        <tbody align="center">
                            <tr>
                                <td>Busca tu Certificado</td>
                                <td><input type="file" name="certificado" /></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Subir Archivo" name="bSubir"/></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </CENTER>
        </div>    
    </body>
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>     
</html>