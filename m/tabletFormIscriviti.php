<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/tabletFormLogin.css">
<!-- <link href='https://fonts.googleapis.com/css2?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css' > -->

<link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css' > 

<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/tabletFormLogin.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo2.png" />
<meta property="og:type" content="website" /> 
<title> Accedi </title></head>

<body background="img/sfondo2.png"  height="100%" width="100%" 
style="background-size: cover" bgproperties="fixed" >

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

<img src="img/ciakchepizza_logo2.png" style="margin-top: -30px" width="900px" />

<!-- ACCEDI -->
<center>
<!-- <table align='center' border='1' bordercolor='black' cellpadding='0' 
       cellspacing='0' height='50px' width='400px' 
       style='background-color: white; margin-top: 0%; margin: auto' >
<tr>
<td> -->
<div class="coolvetica" style="font-size: 70px; color: black; margin-left: 0%; margin-top: -70px"><b><center> Registrati </center></b></div>
<!-- </td>
</tr>
</table> -->
</center>
<!-- EOF ACCEDI -->

<br /><br />

<!-- FORM ISCRIVITI -->
<center>
<table align="center" border="0" cellpadding="0" cellspacing="0"  class="search" style='margin-top: 0px; margin: auto' >
<tr>
<td>

<form action="iscriviti.php" type="submit" name="accedi" 
      method="POST" class="search" class="form_elogin" >
    
    <input type="hidden" value="" class="form_elogin" 
       name="id" align="center" />
    
    <input type="number" placeholder="CAP" class="form_elogin" 
       name="cap" align="center" required />
       
       <br />
       
    <input type="text" placeholder="Nome" class="form_elogin" 
       name="nome" align="center" required />
       
       <br />
       
    <input type="text" placeholder="Cognome" class="form_elogin" 
       name="cognome" align="center" required />
       
       <br />
      
    <input type="text" placeholder="Indirizzo" class="form_elogin" 
       name="indirizzo" align="center" required />
       
       <br />
       
    <input type="text" placeholder="Data" class="form_elogin" 
       name="data" align="center" required />
       
       <br />
       
    <input type="text" placeholder="Telefono" class="form_elogin" 
       name="tel" align="center" required />
       
       <br />


<img src="img/users.png" width="30px" height="30px" style="position: absolute; float: left; margin-left: 5px; margin-top: 6px">
<input type="email" id="padlock" onchange="hideIcon(this);" 
       placeholder="Email" class="form_elogin" 
       name="email" align="center" required />
</img>
       
<br />
<img src="img/padlock.png" width="30px" height="30px" style="position: absolute; float: left; margin-left: 5px; margin-top: 6px">
<input type="password" id="users" onchange="hideIcon(this);" 
       placeholder="Password" class="form_elogin" 
       name="password" align="center" required />
</img>

<br />

<button type="reset" name="reset" class="form_elogin" 
        class="search" value="reset" > Cancel </button>
<br />

<button type="submit" name="iscriviti" class="form_elogin" 
        class="search" > Registrati </button>

</form>

</td>
</tr>
</table>
</center>
<!-- EOF FORM -->

<a href="tabletFormLogin.php" style="color: blue; font-size: 30px; margin-top: 25%; margin-left: 37.5%" ><b> Accedi </b></a>

<a href="tabletFormDelete.php" style="color: blue; font-size: 30px; margin-top: 5%; margin-left: 9.5%" ><b> Delete </b></a>

</body>
</html>
