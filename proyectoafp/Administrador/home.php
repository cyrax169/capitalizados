<?php
 /* Empezamos la sesión */
 @session_start();
 
 /* Si no hay una sesión creada, redireccionar al index. */
 if(empty($_SESSION['usuarioActual'])) { // Recuerda usar corchetes.
 header('Location: ../index.php');
 } // Recuerda usar corchetes
 if($_SESSION['Usuariotipo']== '2') {
      header('Location: ../index.php');
 } // Recuerda usar corchetes
 



        ?>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
         <?php
              include('header.php');
         ?>
    </head>
    <body>
        <div id="page-wrap">
        <div id="contenedor">  
                <?php
                    include('menu_administrador.php');
                ?>
<div>
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="../Salir.php">Salir</a>
       </div>
       </div>
            <CENTER>
            <table  border="0">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr><td height="150" width="250"><table bgcolor='#DFD5FF' border="0" align="center">
                                <thead>
                                    <tr>
                                        <th><font color="#CC0000"> Nuestra Propuesta</font></th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td>
                                            <br>Maximizar la rentabilidad de tus <br>
                                            fondos a través de una estrategia <br>
                                            activa. <br><br>
                                        </td>
                                    </tr>
                                    <tr>
                     <td height="160" ><table border="0" align="center">
                             <thead>
                                 <tr>
                                     <th><font color="#CC0000"> Nuestra Sugerencia</font></th>
                                 </tr>
                             </thead>
                             <tbody align="center">
                                 <tr>
                                     <td  height="100">
                                         Cambios frecuentes en multifondos <br>
                                         con que puedes operar, cuando las <br>
                                         condiciones sean favorables.
                                         <br><br>
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
                        <td height="300" width="380"><table border="0" align="center">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td height="100"><img src="../imagenes/imagen1.png" border="0" width="300" height="300" align="center"/></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td height="430" width="280"><table border="0" align="center">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td><img src="../imagenes/imagen2.png" border="0" width="200" height="200" /></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../imagenes/imagen3.png" border="0" width="200" height="200" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                         
                    </tr>
                 
                </tbody>
            </table>
</CENTER>
            </div>
       
   </body>
    <div id="footer"> <a href=""><img src="../imagenes/footer.png" /></a></div>
</html>
