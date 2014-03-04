<?php @session_start();

 /* Si no hay una sesión creada, redireccionar al index. */
 if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes

    $nombreAlmacenamiento = $_SESSION['usuarioActual']."_".date("j"."-"."n"."-"."Y").".pdf"; 
?>

<?php
    $destinoCartola = "../Cartolas/";
    opendir($destinoCartola);
    $origen = $_FILES['archivo']['tmp_name'];
    $destino = $destinoCartola.$nombreAlmacenamiento;
    copy($origen, $destino);
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
                <?php
                    echo "Archivo Subido Exitosamente";
                ?>
            </div>
        </div>
        <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div>
    </body>
</html>
