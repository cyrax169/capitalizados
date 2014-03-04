<?php
 /* Empezamos la sesión */
 @session_start();

 /* Si no hay una sesión creada, redireccionar al index. */
 if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes
?>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Nuestros Servicios</title>
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

       </div>
            <div>
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="../Salir.php">Salir</a>
       </div>
            <CENTER>
            <table  border="0">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr ><td height="300" width="290"><table border="0" align="center" bgcolor='#DFD5FF'>
                                <tbody>
                                    <tr>
                                        <td height="500" >
                                <ul  style="list-style-position: outside">
                                    <li style="height: 50px"><a href="" style="font-size: 12"> POR QUÉ INCLINARSE POR NUESTRA ASESORÍA </a></li>
                                <li style="height: 50px"><a href="" style="font-size: 12"> SERVICIOS OFRECIDOS</a></li>
                                <li style="height: 50px"><a href="" style="font-size: 12"> BENEFICIOS ADICIONALES DE UNA ESTRATÉGIA ACTIVA</a></li>
                                <li style="height: 50px"><a href="" style="font-size: 12">PROCEDIMIENTO DE CÁLCULO DE LOS HONORARIOS DE LA ASESORÍA</a></li>
                                <li style="height: 50px"><a href="" style="font-size: 12"> INFORMACIÓN RELEVANTE PARA LOS POTENCIALES CLIENTES</a></li>
                                </ul>
                                        </td>
                                    </tr>
                                    <tr>
                     </tr>
                                </tbody>
                            </table>
                        </td>
                        <td height="300" width="300"><table border="0" align="center">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td height="100"><img src="../imagenes/imagen7.png" border="0" width="300" height="300" align="center"/></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td height="300" width="300"><table align="center" border="0">
                                <thead>
                                    <tr>
                                        <th><font color="#CC0000"> BENEFICIOS ADICIONALES DE UNA</font></th>
                                        
                                    </tr>
                                    <tr>
                                        <th><font color="#CC0000"> ESTRATÉGIA ACTIVA</font></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>                                                                    
                                    <tr>
                                        <td height="230">
                                            Obtendrá la oportunidad de generar una <br>
                                            mayor rentabilidad de sus ahorros persona- <br>
                                            les, si decide mantenerlos en la cuenta de <br>
                                            ahorro voluntario o en la cuenta APV, <br>
                                            aprovechando a la vez los beneficios tributa- <br>
                                            rios que tienen cada uno de estos fondos. <br><br>
                                            ¿Por qué?<br><br>
                                            Podrá mejorar su pensión por las mayo-<br>
                                            res rentabilidades obtenidas, y a futuro,<br>
                                            dependiendo de los montos acumulados,<br>
                                            eventualmente podrá retirar dinero en efec-<br>
                                            tivo, como excedente de libre disposición, al<br>
                                            minuto de su jubilación.<br><br> 
                                            Generar la conciencia de los usuarios que <br>
                                            si se preocupan hoy de su fondo de capitaliza-<br>
                                            ción, lo más probable es que puedan gozar <br>
                                            de una mejor pensión en su futuro.<br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                         
                    </tr>
                 
                </tbody>
            </table>
</CENTER>
            </div>
        <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div>
   </body>
   
</html>
