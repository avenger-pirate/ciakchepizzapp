<html>
 <head> 
 <script>  function resolutionX(){ document.write(screen.width);}  function resolutionY(){ document.write(screen.height);}</script> 
 <title>Ciakchepizza-Grattaevinci</title> 
 <link rel="stylesheet" href="style.css" type="text/css">
 <script src="https://pixijs.download/release/pixi.min.js"></script> 
 </head> 
 <body align="center" width="100%" height="100%"> 
 <div id="intestazione"> 
<img src="/m/img/ciakchepizza_logo2.png" width="auto" height="auto">
 </div> 
 <br> 
 <div  id="pixiview" name="pixiview" align="center" width="100%" height="100"> 
 </div>
 <br> <br>
 
 <form id="form_back"><button id="back" onclick="window.location.href='..'">Back </button></form>

 
 </body> 
 <script src="scratchcard.js"></script>  
 </html>
 
 <?php

date_default_timezone_set('Europe/Rome');
  
$fileNow = "oggi.txt";
$oggi = date('d-m-Y H:i:s');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($_GET['click1'] == 'true')
       echo "Timer Attivato!";    

$email = $_GET['email'];
$password = $_GET['password'];
$id = $_GET['id'];}

//SESSIONE IP
$ip = $_SERVER['REMOTE_ADDR'];

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
            
       
      $select = "SELECT nome, cognome, id FROM clienti WHERE email='$email'";

      //SELECT DB FROM CLIENT
      try{
         $risultato = $conn->query($select);}
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Database Non Connesso!";
         die();}
         //echo "Database Connesso.";
         if($riga = $risultato->fetch(PDO::FETCH_ASSOC)){ //scorre tutta la table clienti
          $nome = $riga['nome'];
          $cognome = $riga['cognome'];
          $id = $riga['id'];
         }
          
          
          
          
      $selectGame = "SELECT nome, cognome, time FROM game WHERE id='$id'";

      //SELECT DB FROM GAME
      try{
         $selRisultato = $conn->query($selectGame);}
      catch(PDOException $e){
         echo $e->getMessage();
         die();}
         //echo "Database Connesso.";
         if($riga2 = $selRisultato->fetch(PDO::FETCH_ASSOC)){ //scorre tutta la table game
             $time = $riga2['time'];}


 if($_SERVER['REQUEST_METHOD'] == 'GET'){

     $id = $_GET['id'];
     $nome = $_GET['nome'];
     $cognome = $_GET['cognome'];
     echo $Game = $_GET['Game'];

     $insertTime = "INSERT IGNORE INTO game (id, nome, cognome, time) VALUES ('$id', '$nome', '$cognome', '$oggi')";

      //INSERT DB INTO GAME TIME
      try{
         $stmt = $conn->prepare($insertTime);
         $stmt->execute();}
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Insert Non Inserita!";
         die();}}
         $conn = null;
         
         $unset = session_unset();
         $logout = session_destroy();
         
?>