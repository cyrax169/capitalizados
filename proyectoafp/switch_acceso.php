<?php
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];

include("conexion.php");
   // $result = "";
    $conn = dbConnect();
    

  $datos = mysqli_query($conn,"SELECT  * FROM usuario WHERE rut='$usuario'");
  $row2=mysqli_fetch_array($datos);
  
  if($row2['contrasena']==$contrasena){
  $opc=$row2['tipo'];    
   }else{
      echo $opcdir="<script>location.href='Error_acceso.php';</script>";
   }
   
   
   mysqli_close($conn);


switch ($opc)
        {
          case '1': 
              $opcdir="<script>location.href='administrador/principal.php';</script>";
             break;
          case '2': $opcdir="<script>location.href='usuarios/principal.php';</script>";
                          break;
          
           }
echo $opcdir;
?>