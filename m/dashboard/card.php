<!DOCTYPE html>
<html>
<head>
<link href="/style/card.css" rel="stylesheet" type="text/css">
<script src="https://www.ciakchepizza.com/m/Qrcode/jquery.min.js"></script>
<script src="https://www.ciakchepizza.com/m/Qrcode/qrcode.js"></script>
<script src="https://www.ciakchepizza.com/m/Qrcode/qrcode.min.js"></script>

<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/dashboard/card.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfond.png" />
<meta property="og:type" content="website" /> 
<title> Card </title></head>

<body background="/m/img/sfondo2.png"  height="100%" width="100%" 
style="background-size: cover">


<?php

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
   
<div id="qrcode" align="center"></div>
<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), "Token cliente");
</script>
<!-https://davidshimjs.github.io/qrcodejs/->
<br>


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