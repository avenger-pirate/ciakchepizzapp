<?php

class login{
   public function access($json){

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

         $select = "SELECT * FROM clienti";

      //SELECT DB
      try{
         $stmt = $conn->prepare($select);
         $stmt->execute();
         $risultato = $stmt->fetchAll(PDO::FETCH_ASSOC);
         $tempResult = $risultato;
         $json = json_encode($tempResult);}
        
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Connessione Fallita!";
         die();}
                    
         //Connessione Al DB Chiusa!
         //EOF SELECT DB              
         $conn = null;
         return $json;
         }}

?>