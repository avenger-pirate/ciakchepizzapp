
import java.sql.*;

public class selectDBRemoto{
  public static void main(String[] args){
    try{
      // create our mysql database connection
      String myDriver = "com.mysql.cj.jdbc.Driver";

      String dbName = "ciakchep_gianmarcoapp";
      String user = "ciakchep_gianmarco";
      String pass = "ADf3zhoHcp+T";

      String url = "jdbc:mysql://88.99.253.71:3306/" 
+ dbName + "?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";


      Class.forName(myDriver);
      Connection conn = DriverManager.getConnection(url, user, pass);
      
      String query = "SELECT * FROM clienti";

      // create the java statement
      Statement st = conn.createStatement();
      ResultSet rs = st.executeQuery(query);
      
      while(rs.next()){
         System.out.println();
         System.out.println("id : " + rs.getInt("id"));
         System.out.println("cap : " + rs.getInt("cap"));
         System.out.println("nome : " + rs.getString("nome"));
         System.out.println("cognome : " + rs.getString("cognome"));
         System.out.println("indirizzo : " + rs.getString("indirizzo"));
         System.out.println("data : " + rs.getString("data"));
         System.out.println("tel : " + rs.getString("tel"));
         System.out.println("email : " + rs.getString("email"));
         System.out.println("psw : " + rs.getString("psw"));
         System.out.println("cf : " + rs.getString("cf"));
         System.out.println();}
      
      conn.close();}
    catch (Exception e)
    {
      System.err.println("Got an exception!");
      System.err.println(e.getMessage());
    }
  }
}
