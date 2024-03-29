/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package controlador;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import modelo.usuario;

/**
 *
 * @author Carlitos
 */
@WebServlet(name = "registroController", urlPatterns = {"/registroController"})
public class registroController extends HttpServlet {


    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();        
        String nombre = new String(request.getParameter("txtNombre").getBytes("ISO-8859-1"),"UTF-8");
        String fecha = request.getParameter("txtFecha");
        String usuario = new String(request.getParameter("txtUsuario").getBytes("ISO-8859-1"),"UTF-8");
        String pass = new String(request.getParameter("txtContrasena").getBytes("ISO-8859-1"),"UTF-8");
        String depto = new String(request.getParameter("txtDepartamento").getBytes("ISO-8859-1"),"UTF-8");
        
        int departamento = 0;        
        int id = new usuario().setId()+1;
        try{            
            departamento = Integer.parseInt(depto);
        }catch(NumberFormatException e){}
        
        usuario u = new usuario(id, nombre, fecha, usuario, pass, departamento); //Arreglar en clases
        String mensaje ="";        
        if(u.registrarUsuario()){
            mensaje = "Ingrese bien los datos solicitados";
            request.setAttribute("mensaje", mensaje);
            RequestDispatcher vista = request.getRequestDispatcher("registrar.jsp");
            vista.forward(request, response);
        }      
        else{
            mensaje = "El usuario no se ha ingresado";
            request.setAttribute("mensaje", mensaje);
            RequestDispatcher vista = request.getRequestDispatcher("registrar.jsp");
            vista.forward(request, response);
        }
        
        
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP
     * <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP
     * <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>
}
