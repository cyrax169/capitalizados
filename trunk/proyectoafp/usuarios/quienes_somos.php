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
        <title>Quienes Somos</title>
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
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="menu.php">Salir</a>
       </div>
            <CENTER>
            <table  border="0">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr ><td height="300" width="350"><table border="0" align="center" bgcolor='#DFD5FF'>
                                <thead>
                                    <tr>
                                        <th><font color="#CC0000"> Misión </font></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Somos una empresa especializada en asesorar <br>
                                            los cotizantes del sistema se AFP. Orienta- <br>
                                            mos nuestro trabajo a sugerir el mejor multi- <br>
                                            fondo, en función de la evolución de ellos du- <br>
                                            rante el año y eventuales cambios de AFP, de <br>
                                            acuerdo a la rentabilidad que entregan.<br> 
                                            En la asesoria buscamos maximizar el patrimonio <br>
                                            de nuestros clientes. Para ello nuestra <br>
                                            Empresa diseña una estrategia activa de desiciones <br>
                                            de inversiones, en función de las condiciones <br>
                                            del mercado y su volatilidad, lo que permite a nuestros<br>
                                            clientes mejorar las espectativas de su pension.<br>
                                            Nuestra area de influencia cubre la región del Maule<br>
                                            y el país, otorgando el servicio en plataforma web. <br>
                                        </td>
                                    </tr>
                                    <tr>
                     <td height="160"><table border="0" align="center">
                             <thead>
                                 <tr>
                                     <th><font color="#CC0000">  Visión </font></th>
                                 </tr>
                             </thead>
                             <tbody >
                                 <tr>
                                     <td>
                                         Esperamos ser reconocidos como una empresa<br>
                                         de profesionales de excelencia, que asiste técni-<br>
                                         camente a los cotizantes del sistema de cotización <br>
                                         individual. Pretendemos que en funcion de nuestras <br>
                                         sugerencias, los clientes maximicen la rentabilidad <br>
                                         de sus fondos y por ende incrementen su patrimonio.<br>                                          
                                         Nuestro compromiso es acompañarlo en la bús- <br>
                                         queda de mejores espectativas, en su calidad- <br>
                                         de vida futura al momento de pensionarse.<br>
                                     </td>
                                     <td></td>
                                 </tr>
                             </tbody>
                         </table>
                     </td>
                     </tr>
                                </tbody>
                            </table>
                        </td>
                        <td height="400" width="280"><table align="center" border="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td height="200"><img src="../imagenes/imagen4.png" border="0" width="230" height="230" /></td>
                                    </tr>
                                    <tr>
                                        <td height="300" ><img src="../imagenes/imagen5.png" border="0" width="230" height="230" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td height="300" width="300"><table align="center" border="0">
                                <thead>
                                    <tr>
                                        <th><font color="#CC0000"> Nuestro equipo </font></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td height="230" align="center"><img src="../imagenes/imagen6.png" border="0" width="200" height="200" /></td>
                                    </tr>
                                    <tr>
                                        <td height="230">
                                            Somos una empresa compuesta por <br>
                                            profesionales de vasta experiencia en <br>
                                            materias financieras, que han unido <br>
                                            sus hablilidades y conocimientos para <br>
                                            otorgar un servicio web a sus clientes.<br> 
                                            Dentro de su plana ejecutiva contamos <br>
                                            con Ingenieros Comerciales, Contado- <br>
                                            res Públicos y Auditores, Ingeniero In- <br>
                                            dustrial, que adicionalmente disponen <br>
                                            de grados de Magister y Doctor. <br>
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
