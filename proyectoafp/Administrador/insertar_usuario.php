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
 
$datos = mysqli_query($conn,"SELECT  * FROM cliente WHERE rut='$rut'");
    
   while($row2=mysqli_fetch_array($datos)){
       $nombre=$row2['nombres']; 
       $apellido=$row2['apellidos'];
       $telefono=$row2['telefono'];
       $email=$row2['email'];
       
   }
$strSQL = "update cliente set cliente_activo = '1' where rut='$rut';";
    mysqli_query($conn,$strSQL);
    mysqli_close($conn);

?> 
<?php
// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "cyrax169@gmail.com";
$email_subject = "Contacto desde el sitio web";
$coment="Bienvenido a Capitalizados su clave de acceso es:".$contrasena;


$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $nombre . "\n";
$email_message .= "Apellido: " . $apellido . "\n";
$email_message .= "E-mail: " . $email . "\n";
$email_message .= "Teléfono: " . $telefono . "\n";
$email_message .= "Comentarios: " . $coment . "\n\n";

$email_from=$_POST['email'];
// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

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
                    <table border="" >
                        <tbody align="center">
                            <tr>
                                <td> Contraseña enviada a nuevo Cliente</td>
                              
                            </tr>
                            
                        </tbody>
                    </table>
                </form>
            </CENTER>
        </div>    
    </body>
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>     
</html><?php


