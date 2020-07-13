<!DOCTYPE html>
<html>
    
<?php

class login{
   public function access(){
       
session_start();
session_id();
       
$n="<br />";
echo $n;
       
       
//SESSIONE ID & IP
$ip = $_SERVER['REMOTE_ADDR'];
//echo $id;
//EOF SESSION

$host ='localhost';
$dbname='ciakchep_gianmarcoapp';
$user='ciakchep_gianmarco';
$pass='ADf3zhoHcp+T';

$hostdbname="mysql:host=".$host.";dbname=".$dbname.";charset=utf8;";

$pepe = "/'$'/j&39#/{";
$sale = "K%+£&aP9)K3lz";
   
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
      $password = hash("sha512", $pepe . $sale . $_POST['password']);
      
      $select = "SELECT psw, id FROM clienti WHERE email='$email'";
      //$psw = hash("sha1", $password);      
                  
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
                  $id = $riga['id'];
                  $_SESSION['id'] = $id;
                  //echo $_SESSION['id'];
                  echo "Accesso Effettuato";

                  header("location: /m/dashboard/dashboard.php?access=true&email=".$email."&password=".$password."&id=".$id);

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