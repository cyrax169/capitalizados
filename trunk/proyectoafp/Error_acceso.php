<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
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
            <br><br><br>
            <?php
        echo "El usuario y la clave no coinciden, intente denuevo.";
   ?>
            
 <table border="0" >
                <tbody>
                    <tr>
                        <td height="400" width="500"></td>
                        <td height="400" width="500">
                            <form method="post" action="switch_acceso.php" > 
                                <table border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td>Usuario</td>
                                            <td><input type="text" name="usuario" style="background-color:#D0D0D0" /></td>
                                        </tr>
                                        <tr>
                                            <td>Contraseña</td>
                                            <td><input type="password" name="contrasena" value="" style="background-color:#D0D0D0"/></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" value="Entrar"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </td>
                        <td height="400" width="400"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    
    </body>
   <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>
   
</html>