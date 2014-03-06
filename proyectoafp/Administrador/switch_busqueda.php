<?php
 @session_start();
 

 if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes
 
  if($_SESSION['Usuariotipo']== '2') {
      header('Location: ../index.php');
 } // Recuerda usar corchetes
 
$buscar= $_POST['tipo_cliente'];
switch ($buscar)
        {
          case '0': 
              $opcdir="<script>location.href='../administrador/Busca_rut.php';</script>";
             break;
          case '1': $opcdir="<script>location.href='../administrador/Busca_rut.php';</script>";
                          break;
          case '2' : $opcdir="<script>location.href='../administrador/Busca_nombre.php';</script>";
             break;
          case '3' : $opcdir="<script>location.href='../administrador/Busca_edad.php';</script>";
             break;
          case '4' : $opcdir="<script>location.href='../administrador/Busca_afp.php';</script>";
             break;
          case '5' : $opcdir="<script>location.href='../administrador/Busca_tipo_cliente.php';</script>";
             break;
           }
echo $opcdir;
?>
