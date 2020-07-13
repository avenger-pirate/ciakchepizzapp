<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/formLogin.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> Accedi </title></head>

<body background="img/sfondo.png"  height="100%" width="100%" 
style="background-size: cover">


<?php

session_start();

include("lib/login.php");

if($_SESSION['id'] != $id)
    header("Location: /m/formLogin.php");
    
else{

$obj = new login();
echo $obj->access();}

            /*session_unset();
            session_destroy();
            unset();
            
            session_unset($_SESSION['id']);
            session_destroy($_SESSION['id']);
            unset($_SESSION['id']); */

?>

</body>
</html>

