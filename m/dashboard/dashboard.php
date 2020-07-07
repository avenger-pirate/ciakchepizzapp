
<?php

$oggi = time();
$dopoDomani = time() + 172800;

if($oggi){

if($_SERVER['REQUEST_METHOD'] == 'GET'){


$email = $_GET['email'];
$password = $_GET['password'];
$id = $_GET['id'];
echo $msg = $_GET['msg'];

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
       
      $select = "SELECT nome, cognome FROM clienti WHERE id='$id'";

      //SELECT DB
      try{
         $risultato = $conn->query($select);}
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Database Non Connesso!";
         die();}
         //echo "Database Connesso.";
         if($riga = $risultato->fetch(PDO::FETCH_ASSOC)){ //scorre tutta la table clienti
          $nome = $riga['nome'];
          $cognome = $riga['cognome'];}
    
           
    $conn = null;
    //echo "Bentornato" . " " . $nome . " " . $cognome . "!";
      
}


?>


<!DOCTYPE html>
<html><head>
<link href="/m/style/dashboard.css" rel="stylesheet" type="text/css"><meta charset="UTF-8"/><meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/dashboard/dahsboard.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> dashboard </title>
</head>

<body background="/m/img/sfondo2.png"  height="100%" width="100%" 
style="background-size: cover" bgproperties="fixed" >
    
<?php
$iphone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$ipod = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"WebOS");
$DeskLinux = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"X11;");
$width = " <script>document.write(screen.width); </script>"; 
$n="<br />";echo $n;if($DeskLinux){
   header("Location: https://ciakchepizza.com");
   exit;}
 ?>
<img src="/m/img/ciakchepizza_logo2.png" style="margin-top: -30px" width="350px" />
<br>
<form name="pulsantiera">
<table cellpadding="10" cellspacing="1">
<tr>
    <td><button id="menu"  name="Menu" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/dashboard/menu.php'" >Vai al menu</button></td>
	<td><button id="card"  name="Card" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/dashboard/card.php'" >Card</button></td>
	<td><button id ="game" name="Game" width="60%" onclick="" ><img src="https://www.ciakchepizza.com/m/img/icona_gioco.png" width="70px" height="70px"></button></td>


</tr> <br>
<tr>
    <td><button id="settings" name="Impostazioni" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/dashboard/impostazioni.php'" ><img src="https://www.ciakchepizza.com/m/img/rotella_impostaz.png" width="70px" height="70px"></button></td>
    <td><button id="profile"  name="Profilo" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/dashboard/Profile.php'" ><img src="https://www.ciakchepizza.com/m/img/icona_profilo.png" width="70px" height="70px"></button></td>
	<td><button id ="logout"  name="Logout" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/login.php'">Logout</button></td>
</tr>
</table>
</form>


<?php


}

else{

time_sleep_until(time(), 172800);  

?>

<script>

pulsantiera.Game.disabled=true;

</script>

<?php

}

?>



<!-- BOTTONE BACK -->  
<script>

function goBack() {
  window.history.back();}


</script>

<br /><br />

<center><button onclick="goBack()" >
    
    <img src="/m/img/back.png" alt="back" width="30px" height="30px" />
    
</button></center>
<!-- EOF BOTTONE BACK -->



</body>
</html>