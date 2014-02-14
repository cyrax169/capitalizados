<?php
include("../conexion.php");
   // $result = "";
    $conn = dbConnect();
    //$combobox;

 ?>

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
                    include('menu_administrador.php');
                ?>
            
  <table border="0" >
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                 <tbody>
                    <tr>
                         <td height="350" width="500"></td>
                         <td height="350" width="700">
                             <FORM action="ficha.php" method="post"> 
<h1></h1>  
<table border="0" align="center" bgcolor="#D0D0D0" >
               <thead>
                   <tr>
                       <th height="65"><font color="#CC0000">Busqueda de cliente por Rut</font></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                 <tr>
                       <td height="38"><font color="#666666">ingrese rut</font></td>
                       <td><input type="text" name="rut" value="" /></td>
                   </tr>
                    
                    <tr>
                       <td height="38"> </td>
                       <td><input  type="submit" value="Ir a Consulta" style='width:170px; height:25px' /></td>

                    </tr>
                  
               </tbody>
           </table>

 </FORM> 
                             </td>
                             <td height="350" width="500"></td>
                              </tr>
                              </tbody>
            </table>

      </div>
              </div>
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>
   </body>
</html>