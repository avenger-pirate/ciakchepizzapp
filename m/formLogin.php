<!DOCTYPE html>
<html>
    
<head>
    <link href="style/formLogin.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css' > 

<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/formLogin.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo2.png" />
<meta property="og:type" content="website" /> 
<title> Accedi </title></head>

<body background="img/sfondo2.png"  height="100%" width="100%" 
style="background-size: cover" bgproperties="fixed" >

<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
if($_GET['logout'] == 'true'){
    echo "<div style='font-size: 20px; float: left; margin-left: 900px; margin-top: 0px; position: absolute; color: black'><h1><b>"
    . $msg = $_GET['message'] . "</h1></b></div>";}}


$iphone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$ipod = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"WebOS");
$DeskLinux = (bool) strpos($_SERVER['HTTP_USER_AGENT'],"X11;");

$width = " <script>document.write(screen.width); </script>"; 

$n="<br />";
echo $n;

/*if($DeskLinux){
   header("Location: https://ciakchepizza.com");
   exit;} */
   

?>

<!-- ACCEDI -->
<!-- <center>
<table align='center' border='1' bordercolor='red' cellpadding='0' 
       cellspacing='0' height='50px' width='400px' 
       style='background-color: white; margin-top: 0%; margin: auto' >
<tr>
<td>
<div class="coolvetica" style="font-size: 30px; color: red; margin-left: -5%; margin-top: 0px"><b><i><center> Accedi </center></i></b></div>
</td>
</tr>
</table>
</center> -->
<!-- EOF ACCEDI -->

<img src="img/ciakchepizza_logo2.png" style="margin-top: -30px" width="350px" />

<!-- ACCEDI -->
<center>
<!-- <table align='center' border='1' bordercolor='black' cellpadding='0' 
       cellspacing='0' height='50px' width='400px' 
       style='background-color: white; margin-top: 0%; margin: auto' >
<tr>
<td> -->
<div class="coolvetica" style="font-size: 50px; color: black; margin-left: -4%; margin-top: 20px"><b><center> Accedi </center></b></div>
<!-- </td>
</tr>
</table> -->
</center>
<!-- EOF ACCEDI -->

<br /><br /><br /><br />

<!-- FORM DI LOGIN -->
<center>
<table align="center" border="0" cellpadding="0" cellspacing="0"  class="search" style='margin-top: 0px; margin: auto' >
<tr>
<td>

<form action="login.php" name="accedi" 
      method="POST" class="search" class="form_elogin" height="10px" >
    
<input type="hidden" value="" class="form_elogin" 
      name="id" align="center" />

<img src="img/users.png" width="30px" height="30px" style="position: absolute; float: left; margin-left: 5px; margin-top: 6px">
<input type="email" onchange="hideIcon(this);" 
       placeholder="Email" class="form_elogin" 
       name="email" align="center" required />
</img>
       
<br />
<img src="img/padlock.png" width="30px" height="30px" style="position: absolute; float: left; margin-left: 5px; margin-top: 6px">
<input type="password" onchange="hideIcon(this);" 
       placeholder="Password" class="form_elogin" 
       name="password" align="center" required />
</img>

<br />

<button type="reset" name="reset" class="form_elogin" 
        class="search" value="reset" > Cancel </button>
<br />

<button type="submit" name="login" class="form_elogin" 
        class="search" > Accedi </button>

</form>

</td>
</tr>
</table>
</center>
<!-- EOF FORM -->

<a href="formModPsw.php" style="color: blue; font-size: 15px; margin-top: 5%; margin-left: 15px" ><b> Password Dimenticata </b></a>

<a href="formIscriviti.php" style="color: black; font-size: 20px; margin-top: 35%; margin-left: 20px" ><b> Registrati </b></a>




<!-- BOTTONE BACK -->  
<script>

function goBack() {
  window.history.back();}
  
</script>

<br /><br />

<center><button onclick="goBack()" >
    
    <img src="img/back.png" alt="back" width="30px" height="30px" />
    
</button></center>
<!-- EOF BOTTONE BACK -->

<?php

session_unset();
session_destroy();

?>

</body>
</html>
