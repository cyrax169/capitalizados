<?php
include("../conexion.php");
   // $result = "";
    $conn = dbConnect();
    //$combobox;
    if(isset($_POST['nombre_seleccionado'])){
    $rut=$_POST['nombre_seleccionado'];
    }
 if(isset($_POST['rut'])){
    $rut=$_POST['rut'];
    }
    $datos = mysqli_query($conn,"SELECT  * FROM cliente WHERE rut='$rut'");
    
   while($row2=mysqli_fetch_array($datos)){
       $nombre=$row2['nombres']; 
       $apellido=$row2['apellidos'];
       $fecha_nacimiento=$row2['fecha_nacimiento'];
       $region_residencia=$row2['region_residencia'];
       $genero=$row2['genero'];
       $afp=$row2['afp'];
       $tipo_cliente=$row2['tipo_cliente'];
   }
   
   mysqli_close($conn);
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
<FORM action="insertarregistro.php" method="post"> 
<h1></h1>  
<table border="0" align="center" bgcolor="#D0D0D0" >
               <thead>
                   <tr>
                       <th height="65"><font color="#CC0000">Datos de identificación</font></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td  height="38"><font color="#666666">Rut<nt/fo></td>
                       <td><input type="text" name="rut" value="<?php echo $rut  ?>" maxlength="10"/><font color="#666666"></font></td>
                       
                   </tr>
                   
                   <tr>
                       <td height="38"><font color="#666666">Nombres</font></td>
                       <td><input type="text" name="nombre1" value="<?php echo $nombre  ?>"/></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Apellidos</font></td>
                       <td><input type="text" name="apellido1" value="<?php echo $apellido ?>"/></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Fecha nacimiento</font></td>
                       <td><input type="text" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento ?>"/></td>
                   </tr>
                    <tr>
                       <td height="38"><font color="#666666">Tipo Cliente</font></td>
                       <td><input type="text" name="tipo_cliente" value="<?php echo $tipo_cliente ?>"/></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Región de Residencia</font></td>
                       <td><input type="text" name="region_residencia" value="<?php echo $region_residencia ?>"/></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Genero</font></td>
                       <td><input type="text" name="genero" value="<?php echo $genero ?>"/> </td>    
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">AFP en que se encuentra</font></td>
                       <td><input type="text" name="afp" value="<?php echo $afp ?>"/></td>
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
        <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div>
   </body>
</html>
