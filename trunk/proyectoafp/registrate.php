<?php
include("conexion.php");
   // $result = "";
    $conn = dbConnect();
    //$combobox;
    $row;
    if (empty($rows)) {
        $result = "No se encontraron resultados afp!!";
    }
    if (empty($rows2)) {
        $result = "No se encontraron resultados regiones!!";
    }
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
                    include('menu.php');
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
                       <th height="70"><font color="#CC0000">Datos de identificación</font></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td  height="38"><font color="#666666">Rut<nt/fo></td>
                       <td><input type="text" name="rut" maxlength="10"/><font color="#666666">Ej: 12345678-9</font></td>
                       
                   </tr>
                   
                   <tr>
                       <td height="38"><font color="#666666">Nombres</font></td>
                       <td><input type="text" name="nombre1"/><input type="text" name="nombre2"/></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Apellidos</font></td>
                       <td><input type="text" name="apellido1"/><input type="text" name="apellido2"/></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Fecha nacimiento</font></td>
                       <td><input type="date" name="fecha_nacimiento"/></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Región de Residencia</font></td>
                       <td><select name="region_residencia">
                              <?php  $result = mysqli_query($conn,"SELECT  id, nombre FROM regiones");
    ;
                        while ($row= mysqli_fetch_array($result)){?> <OPTION VALUE="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></OPTION><?php } ?> 
            
                    </select></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Genero</font></td>
                       <td><input type="radio" name="genero" value="1" checked onClick=""> <font color="#666666">Femenino</font>
<input type="radio" name="genero" value="2" onClick=""><font color="#666666">Masculino</font> </td>    
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">AFP en que se encuentra</font></td>
                       <td><select name="afp">
                        <?php        $result2 = mysqli_query($conn,"SELECT  id, nombre FROM afp");
                             while ($row2=mysqli_fetch_array($result2)){?> <OPTION VALUE="<?php echo $row2['id'] ?>"><?php echo $row2['nombre'] ?></OPTION><?php } ?> 
                    </select></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Cartola Cuatrimestral</font></td>
                       <td><input type="file" name="cartola" value="" /></td>
                   </tr>
                   <tr>
                       <td height="38"><font color="#666666">Certificado Saldo Cuenta</font></td>
                       <td><input type="file" value=""  name="certificado" /></td>
                   </tr>
                   
                    <tr>
                       <td height="38"> </td>
                       <td><input  type="submit" value="Registrar" name="registrar" style='width:170px; height:25px' /></td>
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
