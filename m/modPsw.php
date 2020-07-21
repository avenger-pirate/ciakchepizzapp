
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/modPsw.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> Modifica Password </title></head>

<body background="img/sfondo.png"  height="100%" width="100%" 
style="background-size: cover">

<!-- <center><div style="font-size: 15px; color: red; margin-top: 50px" ><i><b> Si E' Sicuri Di Questa Decisione? La Cancellazione E' Irreversibile. Procedere? </b></i></div></center>  -->
 
 <br /><br />
    

    
<?php

include("lib/modPsw.php");

$obj = new modPsw();
echo $obj->mod();
    
?>

</body>
</html>

