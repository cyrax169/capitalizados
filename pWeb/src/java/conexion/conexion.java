package conexion;
import java.sql.*;

public class conexion {
    private String url="jdbc:mysql://localhost:3306/pweb?zeroDateTimeBehavior=convertToNull";
    private String driver="com.mysql.jdbc.Driver";
    private String user="root";
    private String pass="";
    private Connection conexion;

    public conexion() {
        
    }
    
    public void conectar() throws ClassNotFoundException, SQLException {
        Class.forName(driver);
        conexion = DriverManager.getConnection(url, user, pass);
    }
    
    public void desconectar() throws SQLException {
        conexion.close();
    }
    
    public Connection getConection(){
        return conexion;
    }
    
}
