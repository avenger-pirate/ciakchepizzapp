

<!DOCTYPE html>
<html>
    
<!-- <center>
<form action='Delete.php' name='checkbox' id='check' method='POST'>
    
<!-- <input type='hidden' name='email2' value='$email' /> -->

<!-- <input type='hidden' name='password2' value='$password' />

<input type='checkbox' id='si' name='si' value='si' >
   <label for='check'>SI</label>
</input>

<br />

<input type='checkbox' id='no' name='no' value='no' >
   <label for='check'>NO</label>
</input>

<br /><br />

<input type='submit' value='Conferma'>


</form>
</center> -->


<?php

class Delete{
   public function Del(){
       
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
       

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email = $_POST['email'];
      $password = hash("sha512", $pepe . $sale . $_POST['password']);}
      
      
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
       
        $delete = "DELETE FROM clienti WHERE id='$id'";
        
       try{
         if(($email == $mail) && ($password == $psw)){

         $stmt2 = $conn->query($delete);
         echo "Utente eliminato. Ci dispiace, ritorna presto.";}}
         
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Utente non eliminato o non esistente...";
         die();}
         
        if(($email != $mail) || ($mail == null) || ($password != $psw) || ($psw == null)){
             echo "Utente non esistente O Credenziali Sbagliate";}

         $conn = null;
        
}}
?>

</body>
</html>
