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
<script type="text/javascript">
function valida(f) {
  var ok = true;
  var msg = "Debes escribir algo en los campos:\n";
  if(f.elements[0].value == ""){msg += "-rut\n";ok = false;}
  if(f.elements["nombre1"].value == ""){msg += "- nombre1\n";ok = false;}
  if(f.elements["nombre2"].value == ""){msg += "- nombre2\n";ok = false;}
  if(f.elements["apellido1"].value == ""){msg += "- primer apellido\n";ok = false;}
  if(f.elements["apellido2"].value == ""){msg += "- segundo apellido\n";ok = false;}
  if(f.elements["fecha_nacimiento"].value == ""){msg += "- fecha nacimiento\n";ok = false;}
  if(f.elements["tipo_cliente"].value == "0"){msg += "- tipo de cliente\n";ok = false;}
  if(f.elements["region_residencia"].value == "0"){msg += "- region de residencia\n";ok = false;}
  if(f.elements["afp"].value == "0"){msg += "- Nombre AFP\n";ok = false;}
  if(f.elements["certificado"].value == ""){msg += "- Subir Certificado\n";ok = false;}
  if(f.elements["cartola"].value == ""){msg += "- Subir Cartola\n";ok = false;}
  if(ok == false){alert(msg);}return ok;}
    </script>
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
                         <td height="500" width="500"></td>
                         <td height="450" width="700">
                             <FORM id="miForm" action="insertarregistro.php" method="post" onsubmit="return valida(this)"> 
<h1></h1>  
<table border="0" align="top" bgcolor="#D0D0D0" >
               <thead>
                   <tr>
                       <th height="25"><font color="#CC0000">Datos de identificación</font></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td  height="34"><font color="#666666">Rut<font/></td>
                       <td><input type="text" name="rut" maxlength="10"/><font color="#666666">Ej: 12345678-9</font></td>
                       
                   </tr>
                   
                   <tr>
                       <td height="34"><font color="#666666">Nombres</font></td>
                       <td><input type="text" name="nombre1"/><input type="text" name="nombre2"/></td>
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">Apellidos</font></td>
                       <td><input type="text" name="apellido1"/><input type="text" name="apellido2"/></td>
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">Fecha nacimiento</font></td>
                       <td><input type="date" name="fecha_nacimiento"/></td>
                   </tr>
                    <tr>
                       <td height="34"><font color="#666666">Tipo Cliente</font></td>
                       <td><select name="tipo_cliente">
                               <option VALUE="0">Seleccione tipo</option>
                               <option VALUE="1">Trabajador Activo</option>
                               <option VALUE="2">Trabajador Jubilado</option>
                           </select></td>
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">Email</font></td>
                       <td><input type="text" name="email"/></td>
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">Telefono</font></td>
                       <td><input type="text" name="telefono"/></td>
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">Región de Residencia</font></td>
                       <td><select name="region_residencia">
                               <option VALUE="0">Seleccione Region</option>
                              <?php  $result = mysqli_query($conn,"SELECT  id, nombre FROM regiones");
    ;
                        while ($row= mysqli_fetch_array($result)){?> <OPTION VALUE="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></OPTION><?php } ?> 
            
                    </select></td>
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">Genero</font></td>
                       <td><input type="radio" name="genero" value="1" checked onClick=""> <font color="#666666">Femenino</font>
<input type="radio" name="genero" value="2" onClick=""><font color="#666666">Masculino</font> </td>    
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">AFP en que se encuentra</font></td>
                       <td><select name="afp">
                               <option VALUE="0">Seleccione tipo</option>
                        <?php        $result2 = mysqli_query($conn,"SELECT  id, nombre FROM afp");
                             while ($row2=mysqli_fetch_array($result2)){?> <OPTION VALUE="<?php echo $row2['id'] ?>"><?php echo $row2['nombre'] ?></OPTION><?php } ?> 
                    </select></td>
                   </tr>
                   <tr>
                       <td height="30"><font color="#666666">Cartola Cuatrimestral</font></td>
                       <td><input type="file" name="cartola" value="" /></td>
                   </tr>
                   <tr>
                       <td height="30"><font color="#666666">Certificado Saldo Cuenta</font></td>
                       <td><input type="file" value=""  name="certificado" /></td>
                   </tr>
                   <tr>
                       <td height="30"> </td>
                       <td><input type="submit" value="Registrar" name="registrar" style='width:170px; height:25px' /></td>
                   </tr>
                  
               </tbody>
           </table>
 </FORM> 
                             </td>
                             <td height="350" width="300"></td>
                              </tr>
                              </tbody>
            </table>

      </div>
              </div>
        <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>
   </body>
</html>
