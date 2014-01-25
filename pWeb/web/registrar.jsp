<%@page import="java.util.ArrayList"%>
<%@page import="modelo.departamento"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%
    HttpSession sesion_actual = request.getSession(true);
    String sess = (String) sesion_actual.getAttribute("USER");
    
    String sesionAct="";
    
    if(sess== null){
        response.sendRedirect("Login.jsp");
    }
    String mensaje = (String) request.getAttribute("mensaje");
    if(mensaje==(null)){
        mensaje="";
    }
    sesionAct="Cerrar Sesion";
    Boolean muestraCerrar=false;
        if(!sesionAct.equals("")){
            muestraCerrar=true;
        }

    departamento depto = new departamento();
    ArrayList listaDeptos = depto.listaDepartamentos();
    
%>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type="" href="estilo.css"></link>
        <title>Registrar Usuarios</title>
    </head>
        <body>
            <header>                
                <%
                    if(muestraCerrar){
                        out.println("<h3>");
                        out.println("<a href='cerrarSesion.jsp'>CerrarSesion</a>");
                        out.println("</h3>");
                    }
                %>
                <h3 align="right" >Bienvenido: <%= sess %></h3>                
            </header>
            <div class="contenido">
                <%@include file="WEB-INF/jspf/menu.jspf" %>
                <h1 align="center">Ingreso de Usuarios</h1>
                <h3 align="center"><%= mensaje %> </h3>

                <form name="ingUsuarios" action="registroController" method="POST">            
                    <table border="1" align="center">
                        <tbody align="center">
                            <tr>
                                <td>Nombre:</td>
                                <td><input type="text" name="txtNombre" value="" size="50" /></td>
                            </tr>
                            <tr>
                                <td>Fecha de Nacimiento</td>
                                <td><input type="text" name="txtFecha" value="" size="50" /></td>
                            </tr>
                            <tr>
                                <td>Usuario</td>
                                <td><input type="text" name="txtUsuario" value="" size="50" /></td>
                            </tr>
                            <tr>
                                <td>Contraseña</td>
                                <td><input type="text" name="txtContrasena" value="" size="50" /></td>
                            </tr>
                            <tr>
                                <td>Departamento</td>
                                <td><select name="txtDepartamento">
                                        <option>Seleccione</option>
                                        <% 
                                            for(int i=0; i<listaDeptos.size();i++){
                                                depto = (departamento) listaDeptos.get(i);
                                                out.println("<option value="+depto.getId()+">"+depto.getNombreDepartamento()+"</option>");
                                                }
                                        %>
                                    </select></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Agregar" name="btAgregar" /></td>
                            </tr>
                        </tbody>
                    </table>            
                </form>
                <br>
            </div>
            <footer>
                esto es un footer
            </footer>        
    </body>
</html>
