<?php
 /* Empezamos la sesión */
 @session_start();

 /* Si no hay una sesión creada, redireccionar al index. */
 if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes
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
                include('menu_usuario.php');
                ?>
            </div>
            <div>
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="../Salir.php">Salir</a>
       </div>
            <CENTER>
                <form name="subirCartola" action="procesarArchivo.php" method="POST" enctype="multipart/form-data">
                    <table border="1">
                        <tbody align="center">
                            <tr>
                                <td>Busca tu cartola</td>
                                <td><input type="file" name="archivo" value="" width="20" /></td>
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
        <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div> 
        
    </body>
    
</html>
