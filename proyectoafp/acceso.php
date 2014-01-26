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
<br/>
<br/>
<br/>
<br/>
<br/>
          <form method="post" action="" > 
            <table border="0" align="center">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
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
       </div>
   </div>
    
    <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>
    </body>
   
</html>