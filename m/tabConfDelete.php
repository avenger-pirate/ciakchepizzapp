<head>
    <link href="style/tabletFormLogin.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css' > 

<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/formConfDelete.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo2.png" />
<meta property="og:type" content="website" /> 
<title> Delete </title></head>

<body background="img/sfondo2.png"  height="100%" width="100%" 
style="background-size: cover" bgproperties="fixed" >
    
<img src="img/ciakchepizza_logo2.png" style="margin-top: -11px" width="350px" />

<div class="coolvetica" style="font-size: 70px; color: black; margin-left: 0%; margin-top: 10px"><b><center> Conferma </center></b></div>



<?php

session_start();
//echo session_id();

echo "<br /><br />
      <table align='center' border='1' 
      bordercolor='red' cellpadding='0' 
      cellspacing='0' height='0px'
      width='80%'
      style='background-color: white; 
      margin-top: 3%; 
      border: 4px solid red;
      border-right: 4px solid orange;
      border-left: 4px solid orange;
      line-height: 20px' >
      <tr>
      <td>

      <center><h1><div style='font-size: 30px; color: black; margin-top: 40px' ><i><b> Si E' Sicuri Di Questa Decisione? La Cancellazione E' Definitiva. Procedere? </b></i></div></h1></center>
      
      </center></i></b>
      </div>
      </td>
      </tr>
      </table>
      </center>
      
      <table align='center' border='1' 
      bordercolor='red' cellpadding='0' 
      cellspacing='0' height='0px'
      width='80%'
      height='70px'
      style='background-color: white; 
      margin-top: 0%; 
      border: 4px solid red;
      border-right: 4px solid orange;
      border-left: 4px solid orange;
      line-height: 20px' >
      <tr>
      <td>

      <center>
      <h1><div style='font-size: 25px; color: black; margin-top: 30px' ><i><b> Vuoi veramente cancellarti dal sito? </font></b>
      <br /><br /><br /><br /> 

      Clicca SI per eliminare il tuo account <br /><br /> 
      Clicca NO per anullare l' operazione
      </b></i></div></h1>
      </center>
      
      </center></i></b>
      </div>
      </td>
      </tr>
      </table>
      </center>

<br />
<center>
<table bordercolor='red' bgcolor='orange' width='100px' height='50px' border='2' cellpadding='0p' cellspacing='0px' style='margin-top: 0px; margin-left: -140px' >
<tr>
<td>

<a href='tabletFormDelete.php' style='text-decoration: none; margin-left: 0pt'><center> SI </center></a>

</tr>
</td>
</table>


<table bordercolor='red' bgcolor='orange' width='100px' height='50px' border='2' cellpadding='0p' cellspacing='0px' style='margin-top: -50px; margin-left: 40px' >
<tr>
<td>

<a href='tabletFormLogin.php' style='text-decoration: none; margin-left: 0pt'><center> NO </center></a>

</tr>
</td>
</table>
</center>
<br />";

?>