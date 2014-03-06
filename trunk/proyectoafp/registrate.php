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
                  echo '<script type="text/javascript">';
                    include('js/valida.js');
                    include('js/solonumeros.js'); 
                    include('js/soloLetras.js'); 
                echo '</script>';
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
                       <td><input type="text" name="rut" maxlength="10" onkeypress="return justNumbers(event);" /><font color="#666666">Ej: 12345678-9</font></td>
                       
                   </tr>
                   
                   <tr>
                       <td height="34"><font color="#666666">Nombres</font></td>
                       <td><input type="text" name="nombre1" onkeypress="return soloLetras(event);"/><input type="text" name="nombre2" onkeypress="return soloLetras(event);"/></td>
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
                       <td height="30"><font color="#666666">Acepto Términos y Condiciones</font></td>
                       <td><input type="checkbox" name="licencia" ID="lic" value="ok"/><a href="Documentos/contrato.pdf" target="_blank">Terminos y Condiciones</a></td>
                   </tr>
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
      
   </body>
     <div id="footer"> <a href=""><img src="imagenes/footer.png" /></a></div>
</html>
