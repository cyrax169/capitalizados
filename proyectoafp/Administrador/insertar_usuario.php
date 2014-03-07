<?php 
@session_start();

if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes

 if($_SESSION['Usuariotipo']== '2') {
      header('Location: ../index.php');
 } //

include "../conexion.php"; 
$conn = dbConnect();
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$rut=$_POST['rut']; 
$contrasena= substr( md5(microtime()), 1, 8);
$contrasena1=md5($contrasena);

mysqli_query($conn,"INSERT INTO usuario (rut,contrasena,tipo) VALUES ('$rut','$contrasena1','1');");
 

$strSQL = "update cliente set cliente_activo = '1' where rut='$rut';";
    mysqli_query($conn,$strSQL);
    mysqli_close($conn);

?> 


<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente Registrado</title>
         <?php
            include('header.php');
         ?>
    </head>
    
    <body>
        <div id="page-wrap">
            <div id="contenedor">  
                <?php
                include('menu_administrador.php');
                ?>
            </div>
            <CENTER>
                <br><br>
                <br><br>
                <h2>Usuario añadido como cliente</h2>
                <form name="home" action="home.php" method="POST" enctype="multipart/form-data" onsubmit="return comprueba_extension(this, this.certificado.value)">
                    <table border="0" >
                        <tbody align="center">
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </CENTER>
        </div>    
    </body>
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>     
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

