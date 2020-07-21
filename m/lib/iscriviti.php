<?php

class iscriviti{
   public function insert(){

		/*if($cap == '' || $nome == '' || $cognome == '' || 
		   $indirizzo == '' || $data == '' || $tel == '' ||
		   $email == '' || $psw == '' || $cf == ''){ */

      //IP O LOCALHOST
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
         
    if($_SERVER['REQUEST_METHOD']=='POST'){
         $cap = $_POST['cap'];
		 $nome = $_POST['nome'];
		 $cognome = $_POST['cognome'];
		 $indirizzo = $_POST['indirizzo'];
		 $data = $_POST['data'];
		 $tel = $_POST['tel'];
		 $email = $_POST['email'];
		 $psw = hash("sha512", $pepe . $sale . $_POST['password']);
  }
		 
		 
    if($_SERVER['REQUEST_METHOD']=='GET'){
	     $cap = $_GET['cap'];
		 $nome = $_GET['nome'];
		 $cognome = $_GET['cognome'];
		 $indirizzo = $_GET['indirizzo'];
		 $data = $_GET['data'];
		 $tel = $_GET['tel'];
		 $email = $_GET['email'];
		 $psw = hash("sha1", $pepe . $sale . $_GET['password']);

    }

         $select = "SELECT * FROM clienti";

      //SELECT DB CLIENTI
      try{
         $stmt = $conn->prepare($select);
         $stmt->execute();
         }
        
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Connessione Fallita!";
         die();}
         
        //scorre tutta la table clienti
         if($riga = $stmt->fetch(PDO::FETCH_ASSOC)){} 
            // $id = $conn->quote($riga['id']);}
             
		
        $n = 99999;
        $id = rand(0, $n);

        $insert = "insert into clienti (id, cap, nome, cognome, indirizzo, data, tel, email, psw) values ('$id', '$cap', '$nome', '$cognome', '$indirizzo', '$data', '$tel', '$email', '$psw')";
        
       $users = $stmt->rowCount()+1;

      //INSERT DB CLIENTI
      try{
         $stmt2 = $conn->prepare($insert);
         $stmt2->execute();
         
         echo $msg = "Iscrizione_Avvenuta!_Complimenti!_Sei_Il_$users-Utente_Iscritto";
         //sleep(10);
          
        header("location: /m/dashboard/dashboard.php?welcome=".$nome."&msg=".$msg."&email=".$email."&password=".$password."&id=".$id);
        
            $newId = $stmt2->lastInsertId();

        
      }
        
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Iscrizione Fallita!";
         die();}
         
         $conn = null;
         
   }}
         
         
?>