
<?php

class modPsw{
   public function mod(){
       
$n="<br />";
//echo $n;
       
       
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
       
       
   if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $email = $_GET['email'];
      $id = $_GET['id'];
      $nome = $_GET['nome'];
      $cognome = $_GET['cognome'];
      $password = hash("sha512", $pepe . $sale . $_GET['password']);
      $nuovaPsw = hash("sha512", $pepe . $sale . $_GET['nuovaPsw']);}
       
       
       

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email = $_POST['email'];
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $cognome = $_POST['cognome'];
      $password = hash("sha512", $pepe . $sale . $_POST['password']);
      $nuovaPsw = hash("sha512", $pepe . $sale . $_POST['nuovaPsw']);}
      
      
      $select = "SELECT * FROM clienti WHERE email='$email'";

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
         if($riga = $stmt->fetch(PDO::FETCH_ASSOC)){ 
             $id = $riga['id'];
             $mail = $riga['email'];
             $psw = $riga['psw'];
             
         }
         

        $modificaPsw = "UPDATE clienti SET psw = '$nuovaPsw' WHERE id='$id'";
        
       try{
         if($password === $psw){
         $stmt2 = $conn->query($modificaPsw);
         echo "Password Modificata";}
         else{echo "La Vecchia Password Non E' Corretta!";}
           
       }
         
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Password Non cambiata...";
         die();}
         
         $conn = null;
        
}}

?>

