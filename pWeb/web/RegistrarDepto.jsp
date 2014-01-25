<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%    
    String mensaje = (String) request.getAttribute("mensaje");
    if(mensaje==null){
        mensaje = "";
    }
%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type="" href="estilo.css"></link>
        <title>Registrar Departamentos</title>
    </head>
        <body>    
            <header>esto es un header</header>
        <div class="contenido">
            <%@include file="WEB-INF/jspf/menu.jspf" %>
            <h1 align="center">Ingreso de Departamentos</h1>
            <h3 align="center"><%= mensaje %> </h3>            
            <form name="regDepto" action="registroControllerDepartamento" method="POST">
                <table border="1" align="center">               
                    <tbody align="center">
                        <tr>
                            <td>Nombre: </td>
                            <td><input type="text" name="txtNombre" value="" size="30"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Agregar" name="btAgregDepto"/></td>
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
