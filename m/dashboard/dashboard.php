
<!DOCTYPE html>
<html>
<head>
    
<link href="/m/style/dashboard.css" rel="stylesheet" type="text/css"><meta charset="UTF-8"/><meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/dashboard/dahsboard.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> dashboard </title>
</head>

<body background="/m/img/sfondo2.png"  height="100%" width="100%" 
style="background-size: cover" bgproperties="fixed" >
    
<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", 
        '<?php echo $_SERVER['PHP_SELF']; ?>');
    }
</script>
    

<?php

session_start();
session_id();

date_default_timezone_set('Europe/Rome');
  
$fileNow = "oggi.txt";
$oggi = date('d-m-Y H:i:s');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
   if($_GET['logout'] == 'true')
      echo $_GET['message'];


$email = $_GET['email'];
$password = $_GET['password'];
$id = $_GET['id'];

if((!isset($id)) && (!isset($email)) && (!isset($password))){
    
    session_unset();
    session_destroy();
    //unset();
            
    session_unset($_SESSION['id']);
    session_destroy($_SESSION['id']);
    unset($_SESSION['id']);
    header("Location: /m/formLogin.php?logout=true&message=Utente%20Non%20Loggato");
    die();
    exit();}
    
}

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
          $id = $riga['id'];}
          
          
          
          
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
             
         // Store Session Data
          $_SESSION['email'] = $email;
          $_SESSION['nome'] = $nome;
          $_SESSION['cognome'] = $cognome;
          $_SESSION['password'] = $password;
          $_SESSION['id'] = $id;
          

?>


<img src="/m/img/ciakchepizza_logo2.png" style="margin-top: -30px" width="350px" />
<br>
<table cellpadding="10" cellspacing="1">
<tr>
    <td>
        <form action="menu.php" method="GET">
	    <input type="hidden" value="" />
        <button id="menu"  name="Menu" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/dashboard/menu.php'" >Vai al menu</button></td>
        </form>
        
        
<?php
        
 echo "<td>

       <form action='card.php' method='POST' name='Card' >
	   <input type='hidden' name='id' value='$id' />
	   <input type='hidden' name='nome' value='$nome' />
	   <input type='hidden' name='cognome' value='$cognome' />
	   <input type='hidden' name='email' value='$email' />
	   <input type='hidden' name='password' value='$password' />

       <button type='submit' id='cardId' width='60%' name='card' value='true' > Card
       </button>
       
       </form>
       </td>
       
       </tr>
       </table>";



	echo "<td>
        <form action='impostazioni.php' method='POST' name='Settings' >
	    <input type='hidden' name='id' value='$id' />
	    <input type='hidden' name='email' value='$email' />
	    <input type='hidden' name='password' value='$password' />
	    <input type='hidden' name='nome' value='$nome' />
	    <input type='hidden' name='cognome' value='$cognome' />        
	    <button id='settings' name='Impostazioni' width='60% onclick='window.location.href='https://www.ciakchepizza.com/m/dashboard/impostazioni.php'' >
	    <img src='https://www.ciakchepizza.com/m/img/rotella_impostaz.png' width='70px' height='70px'>
	    </button>
	</td>
        </form>";
	   
?>
	
	

    </tr>
    <tr>
    <td>
        <form action="profile.php" method="GET">
        <input type="hidden" value="" />
        <button id="profile"  name="Profilo" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/dashboard/Profile.php'" ><img src="https://www.ciakchepizza.com/m/img/icona_profilo.png" width="70px" height="70px">
        </button></td>
        </form>
        
        
<?php

 echo "<td>

       <form action='logout.php' method='POST' name='Disconnect' >
	   <input type='hidden' name='id' value='$id' />
	   <input type='hidden' name='nome' value='$nome' />
	   <input type='hidden' name='cognome' value='$cognome' />

       <button type='submit' id='logout' width='60%' name='Logout' > Logout 
       </button>
       
       </form>
	   </td>";
	   

//DEBUGGING	   
/* echo $riga['id']."_DB";
echo "<br/>";
echo $riga['nome']."_DB";
echo "<br/>";
echo $riga['cognome']."_DB";
echo "<br/>";
echo $time; */

if(empty($time)){

 echo "<td>

       <form action='game/grattaevinci/' method='GET' name='Game1' >
	   <input type='hidden' name='id' value='$id' />
	   <input type='hidden' name='nome' value='$nome' />
	   <input type='hidden' name='cognome' value='$cognome' />
	   <input type='hidden' name='email' value='$email' />
	   <input type='hidden' name='password' value='$password' />

       <button type='submit' id='game1' width='60%' name='click1'value='true' > 
       <img src='/m/img/icona_gioco.png' width='70px' height='70px' >
       </button>
       
       </form>
       </td>
       
       </tr>
       </table>";

    }

elseif(!empty($time)){
    
//DEBUG
//time_sleep_until(time() + 5);
//time_sleep_until(time(), 172800);
//time_sleep_until(time(), 86400);



 echo "<td>

       <form action='deleteTime.php' method='GET' name='Game0' >
	   <input type='hidden' name='id' value='$id' />
	   <input type='hidden' name='nome' value='$nome' />
	   <input type='hidden' name='cognome' value='$cognome' />
	   <input type='hidden' name='email' value='$email' />
	   <input type='hidden' name='password' value='$password' />

       <button type='submit' id='game0' width='60%' name='click1' value='false' > 
       <img src='/m/img/icona_gioco.png' width='70px' height='70px' >
       </button>
       
       </form>
       </td>
       
       </tr>
       </table>";
    
?>
   

<script>

document.getElementById("game0").disabled = true;
setTimeout(function(){document.getElementById("game0").disabled = false;},86400000);

</script>
              
 

<?php

    $conn = null;
    //echo "Bentornato" . " " . $nome . " " . $cognome . "!";
      
    }
    
  session_unset();
  session_destroy();
  session_destroy($_SESSION['id']);
  unset($_SESSION['id']);
  clearstatcache();
  
?>

</body>
</html>