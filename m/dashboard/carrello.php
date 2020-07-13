<html>
<head>
<title>Carrello ordini</title>
<link href="/m/style/carrello.css" rel="stylesheet" type="text/css">
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
<br><br><br><br><br>
<div id="intestazione">
<img src="/m/img/ciakchepizza_logo2.png" width="auto" height="auto">
<div id="page_title">
<h2>Ordini</h2>
</div>
</div>

<div id="main">
<br>
<table id="pulsanti_carrello" cellspacing="40dp">
<tr>
<td><form><button width="40%" id="button_sconto" onclick="window.location.href=''">Buono sconto</button></form></td>
<td><form><button width="40%" id="button_modifica" onclick="window.location.href=''">Modifica</button></form></td>
<td><form><button width="40%" id="button_procedi" onclick="window.location.href=''">Procedi</button></form></td>
</tr>
<table>
</div>



<!-- BOTTONE BACK -->  




</body>
</html>