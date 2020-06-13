<!DOCTYPE html>
<html><head>
<link href="style/dashboard.css" rel="stylesheet" type="text/css"><meta charset="UTF-8"/><meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/dashboard.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> dashboard </title>
</head>
<body >
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
<img src="img/ciakchepizza_logo2.png" style="margin-top: -30px" width="350px" />
<br>
<div id="pulsantiera">
<table cellpadding="10" cellspacing="1">
<tr>
    <td><button id="menu"  name="Menu" width="60%" ><a href="https://www.ciakchepizza.com/m/menu.php">Vai al menu</a> </button></td>
	<td><button id="card"  name="Card" width="60%" ><a href="https://www.ciakchepizza.com/m/card.php">Card</a> </button></td>
	<td><button id ="game" name="Game" width="60%" ><a href="https://www.ciakchepizza.com/m/game/Grattaevinci/index.html"><img src="https://www.ciakchepizza.com/m/img/icona_gioco.png" width="70px" height="70px"></a></button></td>


</tr> <br>
<tr>
    <td><button id="settings"  name="Impostazioni" width="60%" ><a href="https://www.ciakchepizza.com/m/impostazioni.php"><img src="https://www.ciakchepizza.com/m/img/rotella_impostaz.png" width="70px" height="70px"></a> </button></td>
    <td><button id="profile"   name="Profilo" width="60%" ><a href="https://www.ciakchepizza.com/m/Profile.php"><img src="https://www.ciakchepizza.com/m/img/icona_profilo.png" width="70px" height="70px"></a> </button></td>
	<td><button id ="logout"     name="Logout" width="60%" ><a href="https://www.ciakchepizza.com/m/login.php"> Logout</a></button></td>
</tr>
</table>
</div>
<script>
$('#game').click(function(){
  $(this).prop("disabled",true);
});</script>
</div>
</body>
</html>