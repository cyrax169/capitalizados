<?php

 session_start();
$_SESSION['UsuarioActual']=$_REQUEST['usuario'];

$usuario= $_POST['usuario'];
$contrasenaNormal= $_POST['contrasena'];
$contrasena = md5($contrasenaNormal);
include("conexion.php");
   // $result = "";
    $conn = dbConnect();
    

  $datos = mysqli_query($conn,"SELECT  * FROM usuario WHERE rut='$usuario'");
  $row2=mysqli_fetch_array($datos);
  
  if($row2['contrasena']==$contrasena){
      $_SESSION['autentica']="si";
      $_SESSION['usuarioActual']=$usuario;
      $opc=$row2['tipo']; 
      $_SESSION['Usuariotipo']=$opc;
      
   }else{
      echo $opcdir="<script>location.href='Error_acceso.php';</script>";
   }
   
   
   mysqli_close($conn);


switch ($opc)
        {
          case '1': 
              $opcdir="<script>location.href='administrador/principal.php';</script>";
             break;
          case '2': $opcdir="<script>location.href='usuarios/home.php';</script>";
                          break;
          
           }
echo $opcdir;
?>