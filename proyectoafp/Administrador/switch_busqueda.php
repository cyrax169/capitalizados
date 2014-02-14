<?php

$buscar= $_POST['tipo_cliente'];
switch ($buscar)
        {
          case '0': 
              $opcdir="<script>location.href='../administrador/Busca_rut.php';</script>";
             break;
          case '1': $opcdir="<script>location.href='../administrador/Busca_rut.php';</script>";
                          break;
          case '2' : $opcdir="<script>location.href='../administrador/Busca_rut.php';</script>";
             break;
          case '3' : $opcdir="<script>location.href='../administrador/Busca_rut.php';</script>";
             break;
          case '4' : $opcdir="<script>location.href='../administrador/Busca_rut.php';</script>";
             break;
          case '5' : $opcdir="<script>location.href='../administrador/Busca_rut.php';</script>";
             break;
           }
echo $opcdir;
?>
