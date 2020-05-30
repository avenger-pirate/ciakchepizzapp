<!DOCTYPE html>
<html>

<head>
 <link href="style.css" rel="stylesheet" type="text/css">
   
<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/formLogin.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> dahboard </title></head>

<body background="img/sfondo.png"  height="100%" width="100%" 
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

<div id ="pulsantiera"></div>
<table>
    <td>
        <tr>
            <button  name="Impostazioni" width="60%" ><a href="https://www.ciakchepizza.com/m/impostazioni.html"> Impostazioni</a> </button>
        </tr>
        <tr>
            <button  name="Profilo" width="60%" ><a href="https://www.ciakchepizza.com/m/Profile"> Profilo</a> </button>
        </tr>
        <tr>
            <button  name="Game" width="60%" ><a href="https://www.ciakchepizza.com/game/index.html"> Game</a> </button>
        </tr>
    </td>
</table>
</div>


</center>
<!-- EOF FORM -->

</style>

</body>
</html>