<?php
 /* Empezamos la sesión */
 @session_start();

 /* Si no hay una sesión creada, redireccionar al index. */
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
        <title>Subir Cartola</title>
         <?php
              echo '<script type="text/javascript">';
              include('../js/validadorPDFCartola.js');
              echo '</script>';
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
                <form name="subirCartola" action="procesarArchivo.php" method="POST" enctype="multipart/form-data" onsubmit="return comprueba_extension(this, this.archivo.value)">
                    <table border="1">
                        <tbody align="center">
                            <tr>
                                <td>Busca tu cartola</td>
                                <td><input type="file" name="archivo" value="" width="20" /></td>
                            </tr>
                            <tr>
                                <td>Selecciona Cuatrimestre</td>
                                <td><select name="cuatrimestre">
                                        <option value="0">Seleccione</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Selecciona Año</td>
                                <td><select name="anio" id="anio">
                                        <option value="0">Seleccione</option>
                                    <?php
					for($anio=(date("Y")); 2013<=$anio; $anio--) {
                                        echo "<option value=".$anio.">".$anio."</option>";
						}
                                    ?></select>
                                </td>
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
        
        
    </body>
    <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div> 
    
</html>
