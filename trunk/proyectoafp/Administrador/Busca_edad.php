<?php
include("../conexion.php");
   // $result = "";
    $conn = dbConnect();
    //$combobox;
 @session_start();
    
     if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes
 
  if($_SESSION['Usuariotipo']== '2') {
      header('Location: ../index.php');
 } // Recuerda usar corchetes
 
    
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
      <div>
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="../Salir.php">Salir</a>
       </div>
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
                             <FORM action="Busca_nombre_edad.php" method="post"> 
<h1></h1>  
<table border="0" align="center" bgcolor="#D0D0D0" >
               <thead>
                   <tr>
                       <th height="65"><font color="#CC0000">Búsqueda de cliente por Rango de Edad</font></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                 <tr>
                       <td height="38"><font color="#666666">seleccione rango de edad</font></td>
                       <td><input type="text" name="menor" value="0" size="8" />-<input type="text" name="mayor" value="99" size="8"/></td>
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
       
   </body>
    <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div>
    
</html>