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
 
 $t_cliente=$_POST['tipo_cliente']; 
 
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
                             <FORM action="ficha.php" method="post"> 
<h1></h1>  
<table border="0" align="center" bgcolor="#D0D0D0" >
               <thead>
                   <tr>
                       <th height="65"><font color="#CC0000">Busqueda de cliente por AFP</font></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                 <tr>
                       <td height="38"><font color="#666666">seleccione nombre</font></td>
                       <td><select name="nombre_seleccionado">
                               <OPTION VALUE="0">Seleccione Nombre</OPTION>
                        <?php        $result2 = mysqli_query($conn,"SELECT * FROM cliente  WHERE tipo_cliente=$t_cliente ORDER BY nombres ASC");
                        
                             while ($row2=mysqli_fetch_array($result2)){ $nombre_apellido=$row2['nombres']." ".$row2['apellidos']?> <OPTION VALUE="<?php echo $row2['rut'] ?>"><?php echo strtoupper($nombre_apellido) ?></OPTION><?php } ?> 
                    </select></td>
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