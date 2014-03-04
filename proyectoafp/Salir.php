<?php
  session_start();
  unset($_SESSION["nombre_usuario"]); 
  session_destroy();
  header("Location: index.php");
  exit;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cerrar Sesion</title>
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
                <?php
                    echo "Sesión Finalizada con éxito";
                ?>
            </div>
        </div>
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>
    </body>
</html>