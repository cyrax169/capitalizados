<%@page import="java.util.ArrayList"%>
<%@page import="modelo.usuario"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<% 
    usuario usu = new usuario();
    ArrayList listaUsers = usu.listaUsuarios();
    
%>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type="" href="estilo.css"></link>
        <title>Listado de Usuarios</title>
    </head>
    <body>
        <header>esto es un header</header>
        <div class="contenido">
            <%@include file="WEB-INF/jspf/menu.jspf" %>
            <h1 align="center">Usuarios Registrados en el Sistema</h1>
            <% 
                if(listaUsers.size()==0){
                    out.println("<h3 align='center'> No hay Departamentos Registrados</h3>");
                }
            %>
            <table border="1" align="center">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Fecha Nacimiento</td>
                        <td>Usuario</td>
                        <td>Contraseña</td>
                        <td>Departamento</td>
                    </tr>
                </thead>
                <tbody align="center" cellspading="3">
                    <%                     
                        for(int i = 0; i<listaUsers.size(); i++){
                            usu= (usuario) listaUsers.get(i);
                            out.println("<tr>");
                            out.println("<td>"+usu.getId()+"</td>");
                            out.println("<td>"+usu.getNombre()+"</td>");
                            out.println("<td>"+usu.getFechaNacimiento()+"</td>");
                            out.println("<td>"+usu.getUsuario()+"</td>");
                            out.println("<td>"+usu.getContrasenia()+"</td>");
                            out.println("<td>"+usu.getDepartamento()+"</td>");
                            out.println("</tr>");
                        }
                    %>                
                </tbody>
            </table>
        </div>
        <footer>
            esto es un footer
        </footer>
    </body>
</html>
