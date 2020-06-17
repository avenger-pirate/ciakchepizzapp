<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/tabLogin.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> Accedi </title></head>

<body background="img/sfondo.png"  height="100%" width="100%" 
style="background-size: cover">


<?php

include("lib/tabLogin.php");

$obj = new tabLogin();
echo $obj->access();

?>

</body>
</html>

