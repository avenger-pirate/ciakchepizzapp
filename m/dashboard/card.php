 <!DOCTYPE html>
<html>
<head>
<link href="/m/style/card.css" rel="stylesheet" type="text/css">
<script src="https://www.ciakchepizza.com/m/Qrcode/jquery.min.js"></script>
<script src="https://www.ciakchepizza.com/m/Qrcode/qrcode.js"></script>
<script src="https://www.ciakchepizza.com/m/Qrcode/qrcode.min.js"></script>
<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/dashboard/card.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfond.png" />
<meta property="og:type" content="website" /> 
<title> Card </title></head>
</head>
<body>
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
   
   
 //SESSIONE IP
$ip = $_SERVER['REMOTE_ADDR'];

$host ='localhost';
$dbname='ciakchep_gianmarcoapp';
$user='ciakchep_gianmarco';
$pass='ADf3zhoHcp+T';

$hostdbname="mysql:host=".$host.";dbname=".$dbname.";charset=utf8;";

$pepe = "/'$'/j&39#/{";
$sale = "K%+£&aP9)K3lz";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];}
	
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
       
       
       
      $select = "SELECT score FROM clienti WHERE email='$email'";

 try{
         $risultato = $conn->query($select);}
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Database Non Connesso!";
         die();}
         //echo "Database Connesso.";
         if($riga = $risultato->fetch(PDO::FETCH_ASSOC)){ //scorre tutta la table clienti
		 $score = $riga['score'];}
		 
		 
		    $conn = null;
 ?>
 <script>
function goBack() {
  window.history.back();}
</script>

<div id="upleft">
<table>
<tr>
<td><form><button width="40%" id="back" onclick="goBack()"><img src="/m/img/back.png" width="70px" height="70px"></button></form></td>
</tr>
</table>
</div>

<div id="upright">
<table>
<tr>
<td><form action="user.php" method="GET"><input type="hidden" value="" /><button id="user" name="User" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/dashboard/user.php'" ><img src="/m/img/user2.png"  width="70px" height="70px"></button></form></td>
<td><form action="impostazioni.php" method="GET"><input type="hidden" value="" /><button id="Impostazioni" name="Impostazioni" width="60%" onclick="window.location.href='https://www.ciakchepizza.com/m/dashboard/impostazioni.php'" ><img src="/m/img/settings.png" width="70px" height="70px"></button></form></td>
<td><form action="" method="GET"><input type="hidden" value="" /><button id="logout" name="Logout" width="60%" onclick="window.location.href=''" ><img src="/m/img/logout.png" width="70px" height="70px"></button></form></td>
</tr>
</table>
</div>

<div id="intestazione">
<img src="/m/img/ciakchepizza_logo2.png" width="auto" height="auto">
<div id="page_title">
<img src="/m/img/fidelitycard/titolofidelity.png">
</div>
</div>


<div id="main">
<div id="qrcode" align="center"></div>
<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), <?php echo json_encode($id); ?>);
</script>
<!-https://davidshimjs.github.io/qrcodejs/->
<br><br>
<div id="contatore">
</div>
<h2><script>document.getElementById("contatore").innerHTML = <?php echo json_encode($score); ?>;</script></h2>

</div>



</body>
</html>