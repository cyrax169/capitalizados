<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="modelo.departamento" %>
<%@page import="java.util.ArrayList" %>
<!DOCTYPE html>
<%
    departamento depto = new departamento();
    ArrayList deptos = depto.listaDepartamentos();
%>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type="" href="estilo.css"></link>
        <title>Listar Departamentos</title>
    </head>
        <body>
            <header>
                esto es un header
            </header>
            <div class="contenido">
                <%@include file="WEB-INF/jspf/menu.jspf" %>
                <h1 align ="center">Departamentos</h1>                          
                <% 
                    if(deptos.size()==0){
                        out.println("<h3 align='center'> No hay Departamentos Registrados</h3>");
                    }
                %>
                <table border="2" align="center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                        </tr>
                    </thead>
                    <tbody>                
                        <%                                                                               
                            for(int i=0; i<deptos.size();i++){
                                depto = (departamento) deptos.get(i);
                                out.println("<tr>");
                                out.println("<td>"+depto.getId()+"</td>");                        
                                out.println("<td>"+depto.getNombreDepartamento()+"</td>");                        
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
