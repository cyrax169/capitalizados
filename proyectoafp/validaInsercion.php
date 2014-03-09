<?php 
$rut=$_POST['rut']; 
$nombre1=strtoupper($_POST['nombre1']); 
$nombre2=strtoupper($_POST['nombre2']);
$apellido1=strtoupper($_POST['apellido1']); 
$apellido2=strtoupper($_POST['apellido2']);
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$region_residencia=$_POST['region_residencia'];
$genero=$_POST['genero'];
$afp=$_POST['afp'];
$telefono=$_POST['telefono'];
$email=strtoupper($_POST['email']);
$tipo_cliente=$_POST['tipo_cliente'];
$nombres=$nombre1 .' '. $nombre2;
$apellidos=$apellido1 .' '. $apellido2;
$licencia = $_POST['licencia'];

@session_start();

$_SESSION['usuariorut']=$rut;

include "conexion.php"; 

$conn = dbConnect();

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    
$datos = mysqli_query($conn,"SELECT * FROM cliente WHERE rut='$rut'");
$row2=mysqli_fetch_array($datos);

if($row2['rut']==$rut){
      $mensaje = "usuario existente en nuestros registros";
      if($row2['certificado']=='1'){
          mysqli_query($conn,"delete FROM cliente WHERE rut='$rut'");
          echo $opcdir="<script>location.href='errorClienteSinCert.php';</script>";
      }
      else{
          echo $opcdir="<script>location.href='errorClienteEspera.php';</script>";
      }
}
else{
    mysqli_query($conn,"INSERT INTO cliente (rut,nombres,apellidos,fecha_nacimiento,edad,region_residencia,tipo_cliente,email,telefono,genero,afp,cartola,certificado) VALUES ('$rut','$nombres','$apellidos','$fecha_nacimiento',0,'$region_residencia','$tipo_cliente','$email',$telefono,'$genero','$afp','1','1');");
}   echo $opcdir="<script>location.href='insertarregistro.php';</script>";
  
mysqli_close($conn); 

?>