
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/Delete.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> Delete </title></head>

<body background="img/sfondo.png"  height="100%" width="100%" 
style="background-size: cover">
    
    <head>

<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/Delete.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo.png" />
<meta property="og:type" content="website" /> 
<title> Delete </title></head>

<!-- <center><div style="font-size: 15px; color: red; margin-top: 50px" ><i><b> Si E' Sicuri Di Questa Decisione? La Cancellazione E' Irreversibile. Procedere? </b></i></div></center>  -->
 
 <br /><br />
    

    
<?php

include("lib/Delete.php");

/* DEBUG */
//time_sleep_until(time()+600); //10 minuti
//time_sleep_until(time()+2880); //48 Minuti

/* FUNZIONANTE! */
//time_sleep_until(time()+172800); //48 ore (2 giorni)

$obj = new Delete();
echo $obj->Del();
    
?>

</body>
</html>

