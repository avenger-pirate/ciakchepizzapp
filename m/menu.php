<!DOCTYPE html>
<html>
<head>
<link href="style/menu.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8"/>
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/formLogin.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" />
<title> Menu </title>
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
<img src="img/ciakchepizza_logo2.png" style="margin-top: -30px" width="350px" />
<br>
<div id="categorie">
<table>
<tr>
<td><button id="classiche" onclick="window.location.href='https://www.ciakchepizza.com/m/menu/classiche.php'">Le Classiche</a></button></td>
</tr>
<tr>
<td><button id="bianche" onclick="window.location.href='https://www.ciakchepizza.com/m/menu/bianche.php'">Le bianche</button></td>
</tr>
<tr>
<td><button id="rosse" onclick="window.location.href='https://www.ciakchepizza.com/m/menu/rosse.php'">Le Rosse</button></td>
</tr>
<tr>
<td><button id="gourmet" onclick="window.location.href='https://www.ciakchepizza.com/m/menu/gourmet.php'">Gourmet</button></td>
</tr>
<tr>
<td><button id="creapizza" onclick="window.location.href='https://www.ciakchepizza.com/m/menu/creapizza.php'">Crea la tua pizza</button></td>
</tr>
<tr>
<td><button id="fritti" onclick="window.location.href='https://www.ciakchepizza.com/m/menu/fritti.php'">Fritti</button></td>
</tr>
<tr>
<td><button id="bevande" onclick="window.location.href='https://www.ciakchepizza.com/m/menu/bevande.php'">Bevande</button></td>
</tr>
<table>
</div>

</body>
</html>