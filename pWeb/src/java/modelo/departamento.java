package modelo;

import com.mysql.jdbc.PreparedStatement;
import conexion.conexion;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;

public class departamento {
    private int id;
    private String nombreDepartamento;

    public departamento() {
    }

    public departamento(int id, String nombreDepartamento) {
        this.id = id;
        this.nombreDepartamento = nombreDepartamento.toUpperCase();
    }

    public int getId() {
        return id;
    }

    public String getNombreDepartamento() {
        return nombreDepartamento;
    }
    
    public int setId(){
        int ide=0;
        conexion conn = new conexion();
        String sql = "select max(id) from departamento;";
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
    
    public boolean registrarDepartamento(){
        boolean ok= false;
        conexion conn = new conexion();
        String sql = "insert into departamento (id, nombreDepartamento) values(?,?);";                
        try {
            conn.conectar();            
            PreparedStatement st = (PreparedStatement) conn.getConection().prepareStatement(sql);
            st.setInt(1, id);
            st.setString(2, nombreDepartamento);
            st.executeUpdate();//Insert, Update, Delete
            ok = true;
            conn.desconectar();            
        } catch (ClassNotFoundException ex) {                        
        } catch (SQLException ex) {            
        }
        return ok;
    }
    
    public ArrayList listaDepartamentos(){
        ArrayList<departamento> lista = new ArrayList();
        conexion conn = new conexion();        
        String sql = "select * from departamento;";
        try {
            conn.conectar();
            PreparedStatement st = (PreparedStatement) conn.getConection().prepareStatement(sql);
            ResultSet rs = st.executeQuery(sql);//S
            while(rs.next()){
                lista.add(new departamento(rs.getInt(1), rs.getString(2)));
            }
            conn.desconectar();
        } catch (ClassNotFoundException ex) {            
        } catch (SQLException ex) {         
        }                       
        return lista;       
    }        
    
    
}
