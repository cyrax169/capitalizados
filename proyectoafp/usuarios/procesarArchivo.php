<?php @session_start();

 /* Si no hay una sesión creada, redireccionar al index. */
 if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes
     if($_SESSION['Usuariotipo']== '1') {
      header('Location: ../index.php');
 } //
$cuatrimestre=$_POST['cuatrimestre'];
$anio=$_POST['anio'];
    $nombreAlmacenamiento = $_SESSION['usuarioActual']."_".$cuatrimestre."_".$anio.".pdf"; 

    $destinoCartola = "../Cartolas/";
    opendir($destinoCartola);
    $origen = $_FILES['archivo']['tmp_name'];
    $destino = $destinoCartola.$nombreAlmacenamiento;
    copy($origen, $destino);
    
    $user=$_SESSION['usuarioActual'];
    include "../conexion.php"; 
    $conn = dbConnect();
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $strSQL = "update cliente set cartola = '$nombreAlmacenamiento' where rut='$user';";
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
                include('menu_usuario.php');
                ?>
            </div>
            <div>
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="../Salir.php">Salir</a>
       </div>
           <div>
                <?php
                    echo "Archivo Subido Exitosamente";
                ?>
            </div>
        </div>
       
    </body>
     <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div>
</html>
