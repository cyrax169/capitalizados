<?php
    $destinoCartola = "../Cartolas/";
    opendir($destinoCartola);
    $origen = $_FILES['archivo']['tmp_name'];
    $destino = $destinoCartola.$_FILES['archivo']['name'];
    copy($origen, $destino);
    
    $destinoCertificado = "../Certificados/";
    opendir($destinoCertificado);
    $origen1 = $_FILES['archivo']['tmp_name'];
    $destino1 = $destinoCertificado.$_FILES['archivo']['name'];
    copy($origen1, $destino1);
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
