<!DOCTYPE html>
<html>

<head>
    <link href="style/formLogin.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css' > 
    
    <link href="style/formDelete.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css' > 

<meta charset="UTF-8">
<meta property="og:title" content="ciakchepizza" />
<meta property="og:url" content="https://www.ciakchepizza.com/m/formModPsw.php" />
<meta property="og:image" content="https://www.ciakchepizza.com/m/img/sfondo2.png" />
<meta property="og:type" content="website" /> 
<title> Modifica Password </title></head>

<body background="img/sfondo2.png"  height="100%" width="100%" 
style="background-size: cover" bgproperties="fixed" >
    
    <img src="img/ciakchepizza_logo2.png" style="margin-top: -11px" width="350px" />
    
    <h1></h1><div class="coolvetica" style="font-size: 45px; color: black; margin-left: -4%; margin-top: 10px"><b><center> Modifica Password </center></b></div></h1>
    
    <div class="coolvetica" class="form_eDelete" class="searchDel" style="font-size: 25px; color: black; margin-left: -4%; margin-top: 30px"><b><center> Inserire Nuova Password </center></b></div>
    
    <div style="margin-top: 50px"></div>

<!-- FORM DI DELETE -->
<center>
<table align="center" border="0" cellpadding="0" cellspacing="0"  class="search" style='margin-top: 0px; margin: auto' >
<tr>
<td>

<form action="Delete.php" name="delete" method="POST" class="search" class="form_elogin" height="10px" id="confirm">
    
<input type="hidden" value="" class="form_elogin" 
      name="id" align="center" />

<img src="img/padlock.png" width="30px" height="30px" style="position: absolute; float: left; margin-left: 5px; margin-top: 6px">
<input type="password" onchange="hideIcon(this);" 
       placeholder="Digita Password" class="form_elogin" 
       name="password" align="center" id="password" required />
</img>
       
<br />
<img src="img/padlock.png" width="30px" height="30px" style="position: absolute; float: left; margin-left: 5px; margin-top: 6px">
<input type="password" onchange="hideIcon(this);" 
       placeholder="Ripeti Password" class="form_elogin" 
       name="rptPsw" align="center" id="rptPsw" required />
</img>

<br />

<button type="reset" name="reset" class="form_elogin" 
        class="search" value="reset" id="reset" > Cancel </button>
<br />

<button type="submit" name="delete" class="form_elogin" 
        class="search" onClick="change()" > Modifica Password </button>

</form>

</td>
</tr>
</table>
</center>
<!-- EOF FORM -->


<a href="formIscriviti.php" style="color: blue; font-size: 20px; margin-top: 25%; margin-left: 18%" ><b> Registrati </b></a>

<a href="formLogin.php" style="color: blue; font-size: 20px; margin-top: 5%; margin-left: 15%" ><b> Accedi </b></a>



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


</body>
</html>