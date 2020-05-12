
import java.sql.*;

public class insertDB{
  public static void main(String[] args){
    try{
      // create our mysql database connection
      String myDriver = "com.mysql.cj.jdbc.Driver";

      String dbName = "nome_database";
      String user = "nome_utente";
      String pass = "pass_database";

      String url = "jdbc:mysql://31.12.76.122:3306/" 
+ dbName + "?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";


      Class.forName(myDriver);
      Connection conn = DriverManager.getConnection(url, user, pass);
      
      String query = "SELECT * FROM tabella";

      // create the java statement
      Statement st = conn.createStatement();
      ResultSet rs = st.executeQuery(query);

        while(rs.next()){


    // Esempio Generico
      String insert = " insert into clienti (id, cap, nome, cognome, indirizzo, data, tel, email, psw, cf)" + " values (null, 32456, 'Fabio', 'Oliveiri', 'Piazzale Del Giglio', '17-04-1976', '+393319054281', 'oliveiri@gmail.com', 'password', 'lvrfbi76r17h409t')";


        PreparedStatement stmt = conn.prepareStatement(insert);
      
        // execute the preparedstatement
        stmt.execute();}
      
        conn.close();}
    catch (Exception e)
    {
      System.err.println("Got an exception!");
      System.err.println(e.getMessage());
    }
  }
}
