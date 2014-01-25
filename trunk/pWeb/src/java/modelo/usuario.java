package modelo;

import com.mysql.jdbc.PreparedStatement;
import conexion.conexion;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;

public class usuario {
    private int id;
    private String nombre;
    private String fechaNacimiento;
    private String usuario;   
    private String contrasenia;
    private int departamento;

    public usuario() {
    }

    public usuario(int id, String nombre, String fechaNacimiento, String usuario, String contrasenia, int departamento) {
        this.id = id;
        this.nombre = nombre.toUpperCase();
        this.usuario = usuario.toUpperCase();
        this.fechaNacimiento = fechaNacimiento.toUpperCase();
        this.contrasenia = contrasenia.toUpperCase();
        this.departamento = departamento;
    }

    public usuario(String nombre, String usuario, String fechaNacimiento, String contrasenia, int departamento) {
        this.nombre = nombre;
        this.usuario = usuario;
        this.fechaNacimiento = fechaNacimiento;
        this.contrasenia = contrasenia;
        this.departamento = departamento;
    }
        
    public int getId() {
        return id;
    }
    
    public String getNombre() {
        return nombre;
    }

    public String getFechaNacimiento() {
        return fechaNacimiento;
    }
    
    public String getUsuario() {
        return usuario;
    }

    public String getContrasenia() {
        return contrasenia;
    }

    public int getDepartamento() {
        return departamento;
    }
    
    public int setId(){
        int ide=0;
        conexion conn = new conexion();
        String sql = "select max(id) from usuarios;";
        try {
            conn.conectar();
            PreparedStatement st = (PreparedStatement) conn.getConection().prepareStatement(sql);
            ResultSet rs = st.executeQuery();
            if(rs.next()){
                ide = rs.getInt(1);
            }
            conn.desconectar();         
        } catch (ClassNotFoundException ex) {            
        } catch (SQLException ex) {           
        }
        this.id=ide;
        return ide;
    }

    public boolean registrarUsuario(){
        boolean ok= false;
        conexion conn = new conexion();
        String sql = "insert into usuarios (id, nombre, fechaNacimiento, usuario, contrasenia, departamento) values(?,?,?,?,?,?);";                
        try {
            conn.conectar();            
            PreparedStatement st = (PreparedStatement) conn.getConection().prepareStatement(sql);
            st.setInt(1, id);
            st.setString(2, nombre);
            st.setString(3, fechaNacimiento);
            st.setString(4, usuario);
            st.setString(5, contrasenia);
            st.setInt(6, departamento);                      
            st.executeUpdate();//Insert, Update, Delete
            ok = true;
            conn.desconectar();            
        } catch (ClassNotFoundException ex) {                        
            ex.printStackTrace();
        } catch (SQLException ex) {   
            ex.printStackTrace();
            //System.out.println(ex.getMessage());
        }
        return ok;
    }
    
    public boolean borrarUsuario(){
        boolean ok= false;
        conexion conn = new conexion();
        String sql = "delete from usuaios where id = "+id +";";
        try {
            conn.conectar();            
            PreparedStatement st = (PreparedStatement) conn.getConection().prepareStatement(sql);
            st.setInt(1, id);           
            st.executeUpdate();//Insert, Update, Delete
            ok = true;
            conn.desconectar();            
        } catch (ClassNotFoundException ex) {                        
            ex.printStackTrace();
        } catch (SQLException ex) {   
            ex.printStackTrace();
            //System.out.println(ex.getMessage());
        }
        return ok;
    }
    
    public ArrayList listaUsuarios(){
        ArrayList<usuario> lista = new ArrayList();
        conexion conn = new conexion();        
        String sql = "select * from usuarios;";
        try {
            conn.conectar();
            PreparedStatement st = (PreparedStatement) conn.getConection().prepareStatement(sql);
            ResultSet rs = st.executeQuery(sql);//S
            while(rs.next()){
                lista.add(new usuario(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4), rs.getString(5), rs.getInt(6)));
            }
            conn.desconectar();
        } catch (ClassNotFoundException ex) {            
        } catch (SQLException ex) {         
        }                       
        return lista;       
    }        
    
}
