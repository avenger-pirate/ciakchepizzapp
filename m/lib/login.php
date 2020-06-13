<!DOCTYPE html>
<html>
    
<?php

class login{
   public function access(){
       
$iphone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$ipod = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"WebOS");
$DeskLinux = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"X11;");

$width = " <script>document.write(screen.width); </script>";

$n="<br />";
echo $n;
       
       
//SESSIONE ID & IP
$id = session_start();   //id = 1
$ip = $_SERVER['REMOTE_ADDR'];
//echo $id;
//EOF SESSION

$host ='localhost';
$dbname='ciakchep_gianmarcoapp';
$user='ciakchep_gianmarco';
$pass='ADf3zhoHcp+T';

$hostdbname="mysql:host=".$host.";dbname=".$dbname.";charset=utf8;";
   
try{
   //CONNESSIONE DB
   $conn = new PDO($hostdbname, $user, $pass);}
   catch(PDOException $e){
       echo $e->getMessage();
       echo "<br />" . "Connessione Fallita!";
       die();}
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       //echo "Connessione Riuscita!";
       //EOF CONNESSIONE DB

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email = $_POST['email'];
      $password = hash("sha512", $_POST['password']);
      
      $select = "SELECT psw, id FROM clienti WHERE email='$email'";
                  
     //SELECT DB
      try{
         $risultato = $conn->query($select);}
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Database Non Connesso!";
         die();}
         //echo "Database Connesso.";
         if($riga = $risultato->fetch(PDO::FETCH_ASSOC)){ //scorre tutta la table clienti
           $conn->quote($riga['email']);
           $conn->quote($riga['psw']);
            $conn->quote($riga['id']);
            $accesso = ($password === $riga['psw']);}}
                      
            //$accesso_email = ($email === $mail);}
            else{
                $accesso = false;}
                
               /* DEBUGING */
            //echo $_POST['password']."\n"; echo $_POST['email']."\n"; echo $email."\n"; echo $password."\n"; 

            $conn = null; //Connessione Al DB Chiusa!
       //EOF SELECT DB
            
            //CONTROLLO ACCESSO AL LOGIN DEL SITO ---> (main.php)
             if($accesso){
                  $_SESSION['id'] = $riga['id'];
                  //echo $_SESSION['id'];
                  echo "Accesso Effettuato";

                  header("location: dashboard.php?welcome=1&email=".$email."&password=".$password."&id=".$id);

             }
              else{
                     echo $erre = "<center>
                                   <table align='center' border='1' 
                                          bordercolor='red' cellpadding='0' 
                                          cellspacing='0' height='0px'
                                          width='70%' 
                                          style='background-color: white; 
                                          margin-top: 120%' >
                                   <tr>
                                   <td>
                                   <div style='font-size: 30px; color: red'><b><i><center> Login Fallita </center></i></b>
                                   </div>
                                   </td>
                                   </tr>
                                  </table>
                                  </center>";}
                                  
            //EOF CONTROLLO ACCESSO AL LOGIN DEL SITO
            

}}
?>

</html>
