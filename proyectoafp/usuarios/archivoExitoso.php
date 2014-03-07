    <?php
    
    @session_start();
 
 if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes
    if($_SESSION['Usuariotipo']== '1') {
      header('Location: ../index.php');
 } //
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
        </div>
        
    </body>
    <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div>
    
</html>
