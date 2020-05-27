<!DOCTYPE html>
<html>
    
<?php

class login{
   public function access(){
       
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
      //$password = hash("sha512", $_POST['password']);
      $password = $_POST['password'];

      $select = "SELECT psw, id FROM clienti WHERE email='$email'";
      $psw = $password;      
                  
     //SELECT DB
      try{
         $risultato = $conn->query($select);}
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Database Non Connesso!";
         die();}
         //echo "Database Connesso.";
         if($riga = $risultato->fetch(PDO::FETCH_ASSOC)){ //scorre tutta la table utenti
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

                  header("location: /home1/ciakchep/public_html/m/menu/main.php?welcome=1&email=".$email."&password=".$password."&id=".$id);

             }
              else{
                  //header("location: /home1/ciakchep/public_html/m/?login_fallita=2");
                  echo "Login Fallita";

  
                  
                  }
            //EOF CONTROLLO ACCESSO AL LOGIN DEL SITO
            

}}
?>

</html>