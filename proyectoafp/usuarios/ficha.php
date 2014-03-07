<?php
 /* Empezamos la sesión */
 @session_start();

 /* Si no hay una sesión creada, redireccionar al index. */
 if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes
     if($_SESSION['Usuariotipo']== '1') {
      header('Location: ../index.php');
 } //
 
?>
<?php
include("../conexion.php");
   // $result = "";
    $conn = dbConnect();
    //$combobox;
   // session_start();
     
    if(isset($_SESSION['usuarioActual'])){
    $rut=$_SESSION['usuarioActual'];
    }
    $datos = mysqli_query($conn,"SELECT  * FROM cliente WHERE rut='$rut'");
   
   while($row2=mysqli_fetch_array($datos)){
       $nombre=$row2['nombres']; 
       $apellido=$row2['apellidos'];
       $fecha_nacimiento=$row2['fecha_nacimiento'];
       $region_residencia=$row2['region_residencia'];
         $region = mysqli_query($conn,"SELECT * FROM regiones WHERE id=$region_residencia");
          while($row3=mysqli_fetch_array($region)){
         $region_residencia=$row3['nombre'];
          }
       $genero=$row2['genero'];
       $afp=$row2['afp'];
            $afp1 = mysqli_query($conn,"SELECT * FROM afp WHERE id='$afp'");
            while($row4=mysqli_fetch_array($afp1)){
            $afp=$row4['nombre'];
          }
       $tipo_cliente=$row2['tipo_cliente'];
       $telefono=$row2['telefono'];
       $email=$row2['email'];
       
       if($tipo_cliente==1){
          $tipo_cliente='TRABAJADOR ACTIVO'; 
       }
       if($tipo_cliente==2){
          $tipo_cliente='TRABAJADOR JUBILADO'; 
       }
       if($genero==1){
          $genero='FEMENINO'; 
       }
       if($genero==2){
          $genero='MASCULINO'; 
       }
   }
    $ruta = mysqli_query($conn,"SELECT * FROM cliente WHERE rut='$rut'");
          while($certificado=mysqli_fetch_array($ruta)){
          $ruta_certificado=$certificado['certificado'];
          $ruta_cartola=$certificado['cartola'];
          }
          $url="../Certificados/".$ruta_certificado;
          $url_cartola="../Cartolas/".$ruta_cartola;
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
                    include('menu_usuario.php');
                ?>
            <div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="../Salir.php">Salir</a>
       </div>
  <table border="0" >
                
                 <tbody>
                    <tr>
                         <td height="350" width="500"></td>
                         <td height="350" width="700">
<FORM action="insertarregistro.php" method="post"> 
<h1></h1>  
<table border="0" align="center" bgcolor="#D0D0D0" >
               <thead>
                   <tr>
                       <th height="59"><font color="#CC0000">Datos de identificación</font></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td  height="36"><font color="#666666">Rut<nt/fo></td>
                       <td><input type="text" name="rut" size="40" value="<?php echo $rut  ?>" maxlength="10" readonly="readonly" /><font color="#666666"></font></td>
                       
                   </tr>
                   
                   <tr>
                       <td height="36"><font color="#666666">Nombres</font></td>
                       <td><input type="text" name="nombre1" size="40" value="<?php echo strtoupper($nombre)  ?>" readonly="readonly" /></td>
                   </tr>
                   <tr>
                       <td height="36"><font color="#666666">Apellidos</font></td>
                       <td><input type="text" name="apellido1" size="40" value="<?php echo strtoupper($apellido) ?>" readonly="readonly" /></td>
                   </tr>
                   <tr>
                       <td height="36"><font color="#666666">Fecha nacimiento</font></td>
                       <td><input type="text" name="fecha_nacimiento" size="40" value="<?php echo $fecha_nacimiento ?>" readonly="readonly" /></td>
                   </tr>
                    <tr>
                       <td height="36"><font color="#666666">Tipo Cliente</font></td>
                       <td><input type="text" name="tipo_cliente" size="40" value="<?php echo $tipo_cliente ?>" readonly="readonly" /></td>
                   </tr>
                    <tr>
                       <td height="34"><font color="#666666">Email</font></td>
                       <td><input type="text" name="email" size="40" value="<?php echo strtoupper($email) ?>" readonly="readonly" /></td>
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">Telefono</font></td>
                       <td><input type="text" name="telefono" size="40" value="<?php echo $telefono ?>" readonly="readonly" /></td>
                   </tr>
                   <tr>
                       <td height="36"><font color="#666666">Región de Residencia</font></td>
                       <td><input type="text" name="region_residencia"  size="40" value="<?php echo $region_residencia ?>" readonly="readonly" /></td>
                   </tr>
                   <tr>
                       <td height="36"><font color="#666666">Genero</font></td>
                       <td><input type="text" name="genero" size="40" value="<?php echo $genero ?>" readonly="readonly" /> </td>    
                   </tr>
                   <tr>
                       <td height="34"><font color="#666666">AFP en que se encuentra</font></td>
                       <td><input type="text" name="afp" size="40" value="<?php echo strtoupper($afp) ?>" readonly="readonly" /></td>
                   </tr>
                    <tr>
                       <td height="33"><a href="<?php echo $url; ?>" target="_blank">Certificado Afiliación</a><br /></td>
                       <td><a href="<?php echo $url_cartola; ?>" target="_blank">Ultima Cartola</a></td>
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
