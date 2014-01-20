<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
         <?php
              include('header.php');
         ?>
    </head>
    <body>
        <div id="contenedor">  
                <?php
                    include('menu.php');
                ?>

         

           
         

           
           <form method="post" action="">
           <input type="hidden" name="op" value="login"/>
           usuario:<input type="text" name="usuario"/><br/>
           contraseña: <input type="password" name="contrasenia"/><br/>
           <input type="submit" value="Entrar"/>
           </form>
       </div>
   </body>
</html>