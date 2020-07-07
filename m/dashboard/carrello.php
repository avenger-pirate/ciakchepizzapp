<html>
<head>
<title>Carrello ordini</title>
<link href="/m/style/carrello.css" rel="stylesheet" type="text/css">
</head>
<body align="left">
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
<div align="left" id="upleft">
<table>
<tr>
<td><form id="form_back"><button width="40%" id="back" onclick="window.location.href='..'"><img src="/m/img/back.png" width="70px" height="70px"></button></form></td>
</tr>
</table>
</div>

<div align="right" id="upright">
<table>
<tr>
<td><form id="User_button"><button width="40%" id="User" onClick="window.location.href='https://www.ciakchepizza.com/m/dashboard/user.php'"><img src="/m/img/user2.png"  width="70px" height="70px"></form></td>
<td><form id="Settings_button"><button width="40%" id="Impostazioni" onClick="window.location.href='https://www.ciakchepizza.com/m/dashboard/impostazioni.php'"><img src="/m/img/settings.png"  width="70px" height="70px"></form></td>
<td><form id="Dashboard_Button"><button width="40%" id="Logout" onClick="window.location.href='https://www.ciakchepizza.com/m/dashboard/dashboard.php'"><img src="/m/img/logout.png" width="70px" height="70px"></form></td>
</tr>
</table>
</div>

<br><br><br>
<div id="intestazione">
<img src="/m/img/ciakchepizza_logo2.png" width="350px">
</div>

<div id="main">
<h2>Ordini</h2>
</div>



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