<%-- 
    Document   : cerrarSesion
    Created on : 11-12-2013, 12:28:04 PM
    Author     : Carlitos
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type="" href="estilo.css"></link>
        <title>Cerrar Sesion</title>
    </head>
    <%
        HttpSession ses = request.getSession();
        ses.invalidate();
    %>
    <body>
        <header>
            esto es un header
        </header>
        <div class="contenido">
            <%@include file="WEB-INF/jspf/menu.jspf" %>
            <h1>Su sesión ha terminado con éxito</h1>
        </div>
        <footer>
            esto es un footer
        </footer>
    </body>
</html>
