<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir Cartola</title>
         <?php
              echo '<script type="text/javascript">';
              include('js/validadorPDFCertificado.js');
              echo '</script>';
              include('header.php');
         ?>
    </head>
    
    <body>
        <div id="page-wrap">
            <div id="contenedor">  
                <?php
                include('usuarios/menuCertificado.php');
                ?>
            </div>
            <CENTER>
                <br><br>
                <br><br>
                <h2>Estás por completar tu registro</h2>
                <form name="subirCartola" action="procesaCertificado.php" method="POST" enctype="multipart/form-data" onsubmit="return comprueba_extension(this, this.certificado.value)">
                    <table border="1" >
                        <tbody align="center">
                            <tr>
                                <td>Busca tu Certificado</td>
                                <td><input type="file" name="certificado" /></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Subir Archivo" name="bSubir"/></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </CENTER>
        </div>    
    </body>
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>     
</html>