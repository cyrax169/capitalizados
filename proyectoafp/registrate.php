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
                       <td><input type="text" name="region"/></td>
                   </tr>
                   <tr>
                       <td height="45">Genero</td>
                       <td><input type="radio" name="femenino" value="" checked="checked"  />Femenino<input type="radio" name="masculino" value="" checked=""  />Masculino</td>    
                   </tr>
                   <tr>
                       <td height="45">AFP en que se encuentra</td>
                       <td><input type="text" name="afp"/></td>
                   </tr>
                   <tr>
                       <td height="45">Cartola Cuatrimestral</td>
                       <td><input type="file" name="cartola" value="" disabled="disabled" /></td>
                   </tr>
                   <tr>
                       <td height="45">Certificado Saldo Cuenta</td>
                       <td><input type="file" name="certificado" value="" disabled="disabled" /></td>
                   </tr>
                   
               </tbody>
           </table>
      </div>
   </body>
</html>
