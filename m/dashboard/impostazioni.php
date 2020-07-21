<!DOCTYPE html>
<html>
<head>
<link href="style/formLogin.css" rel="stylesheet" >
<link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css' > 
<link href="/style/card.css" rel="stylesheet" type="text/css">
<script src="https://www.ciakchepizza.com/m/Qrcode/jquery.min.js"></script>
<script src="https://www.ciakchepizza.com/m/Qrcode/qrcode.js"></script>
<script src="https://www.ciakchepizza.com/m/Qrcode/qrcode.min.js"></script>

<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/dashboard/impostazioni.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfond.png" />
<meta property="og:type" content="website" /> 
<title> Card </title>

</head>

<body background="/m/img/sfondo2.png"  height="100%" width="100%" 
style="background-size: cover">
    
<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = $_GET['id'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    
    
echo "<br /><br />

      <center>
      <form action='/m/formModPsw.php' method='POST' name='Modifica' class='search' class='form_elogin' >
	    <input type='hidden' name='id' value='$id' />
	    <input type='hidden' name='password' value='$password' />
	    <input type='hidden' name='nome' value='$nome' />
	    <input type='hidden' name='cognome' value='$cognome' />        
	    <button id='Update' name='modifica' value='true' width='60px' onclick='window.location.href='https://www.ciakchepizza.com/m/formModPsw.php'' style='color: blue; font-size: 55px; margin-top: 50px; margin-left: 0px; background-color: orange; color: white' > Modifica Password
	    </button>
	  </td>
      </form>
      </center>";
      
      
echo "<br /><br />

      <center>
      <form action='/m/formConfDelete.php' method='POST' name='Delete' class='search' class='form_elogin' >
	    <button id='Cancella' name='delete' width='48px' onclick='window.location.href='https://www.ciakchepizza.com/m/formConfDelete.php'' style='color: blue; font-size: 55px; margin-top: 5px; text-align: center; margin-left: 0px; background-color: orange; color: white; display: block; width: 480px; height: 70px; border: none; padding: 3px 28px; cursor: pointer; text-align: center;' > Delete
	    </button>
	  </td>
      </form>
      </center>";}


$iphone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$ipod = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"WebOS");
$DeskLinux = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"X11;");

$width = " <script>document.write(screen.width); </script>"; 

$n="<br />";
echo $n;

if($DeskLinux){
   header("Location: https://ciakchepizza.com");
   exit;}
   
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