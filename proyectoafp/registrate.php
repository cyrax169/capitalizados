<?php
include("conexion.php");
   // $result = "";
    $conn = dbConnect();
    //$combobox;
    $row;

    
    
   
    
    
/*while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
  }*/
    
    
  /*  $sql = 'SELECT  id, nombre FROM afp';
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();
    
    $sql2 = 'SELECT  id, nombre FROM regiones';
    $stmt2 = $conn->query($sql2);
    $rows2 = $stmt2->fetchAll();*/
    
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
        <div id="contenedor">  
                <?php
                    include('menu.php');
                ?>
           
<FORM action="insertarregistro.php" method="post"> 
<h1>Datos de identificación</h1>  
<table border="0" align="center" bgcolor="#B0B0B0">
               <thead>
                   <tr>
                       <th></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td  height=45">Rut</td>
                       <td><input type="text" name="rut"/></td>
                   </tr>
                   
                   <tr>
                       <td height="45">Nombres</td>
                       <td><input type="text" name="nombre1"/><input type="text" name="nombre2"/></td>
                   </tr>
                   <tr>
                       <td height="45">Apellidos</td>
                       <td><input type="text" name="apellido1"/><input type="text" name="apellido2"/></td>
                   </tr>
                   <tr>
                       <td height="45">Fecha nacimiento</td>
                       <td><input type="date" name="fecha_nacimiento"/></td>
                   </tr>
                   <tr>
                       <td height="45">Región de Residencia</td>
                       <td><select name="region_residencia">
                              <?php  $result = mysqli_query($conn,"SELECT  id, nombre FROM regiones");
    ;
                        while ($row= mysqli_fetch_array($result)){?> <OPTION VALUE="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></OPTION><?php } ?> 
            
                    </select></td>
                   </tr>
                   <tr>
                       <td height="45">Genero</td>
                       <td><input type="radio" name="genero" value="1" checked onClick=""> Femenino
<input type="radio" name="genero" value="2" onClick=""> Masculino</td>    
                   </tr>
                   <tr>
                       <td height="45">AFP en que se encuentra</td>
                       <td><select name="afp">
                        <?php        $result2 = mysqli_query($conn,"SELECT  id, nombre FROM afp");
                             while ($row2=mysqli_fetch_array($result2)){?> <OPTION VALUE="<?php echo $row2['id'] ?>"><?php echo $row2['nombre'] ?></OPTION><?php } ?> 
                    </select></td>
                   </tr>
                   <tr>
                       <td height="45">Cartola Cuatrimestral</td>
                       <td><input type="file" name="cartola" value="" /></td>
                   </tr>
                   <tr>
                       <td height="45">Certificado Saldo Cuenta</td>
                       <td><input type="file" value=""  name="certificado" /></td>
                   </tr>
                   
                    <tr>
                       <td height="45"> </td>
                       <td><input type="submit" value="Registrar" name="registrar" /></td>
                   </tr>
                  
               </tbody>
           </table>
 </FORM> 
      </div>
   </body>
</html>
