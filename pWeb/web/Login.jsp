<%-- 
    Document   : Login
    Created on : 04-12-2013, 01:40:22 PM
    Author     : Carlitos
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type="" href="estilo.css"></link>
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <header>
            Esto es un header
        </header>        
        <div class="contenido">
            <%@include file="WEB-INF/jspf/menu.jspf" %>
            <h1 align="center">Ingrese sus Datos</h1>
            <form name="formLogin" action="iniciarSesion" method="POST">
                <table border="2" align="center">
                    <tbody align ="center">
                        <tr>
                            <td>Nombre de Usuario: </td>
                            <td><input type="text" name="txtUsuario" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>Contraseña: </td>
                            <td><input type="password" name="txtPass" value="" size="30" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Ingresar" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <footer>
            esto es un footer
        </footer>
</body>
</html>
