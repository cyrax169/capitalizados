<?php @session_start();
    $nombreAlmacenamiento = $_SESSION['usuarioActual']."_".date("j"."-"."n"."-"."Y").".pdf"; 
?>

<?php
    $destinoCertificado = "Certificados/";
    opendir($destinoCertificado);
    $origen1 = $_FILES['certificado']['tmp_name'];
    $destino1 = $destinoCertificado.$nombreAlmacenamiento;
    copy($origen1, $destino1);    
    
    $user=$_SESSION['usuarioActual'];
    include "conexion.php"; 
    $conn = dbConnect();
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $strSQL = "update cliente set certificado = '$nombreAlmacenamiento' where rut='$user';";
    mysqli_query($conn,$strSQL);
    mysqli_close($conn);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Archivo Exitoso</title>
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
           <div>
               <br><br><br>
               <h3>Su Registro ha sido completado. <br>Certificado subido Exitosamente. </h3>
                
            </div>
        </div>
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>
    </body>
</html>