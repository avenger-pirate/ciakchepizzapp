<!DOCTYPE html>
<html>

<head>
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




<button  name="Game" width="60%" ><a href="https://www.ciakchepizza.com/game/index.html"> Game</a> </button>


</center>
<!-- EOF FORM -->



<style type="text/css">

.titolo{
height: 50%;
color: black;
font-size:22px;
text-align:center;
margin-top: 100px;}

.login{
height: 50%;
width: 80%;
color: black;
font-size: 22px;
margin-top: 7%;
margin-left: 8%;
text-decoration: none;
float:center;}

.signup{
color: blue;
font-size:20px;
margin-top: -40px;
margin-left: 88.1%;
text-decoration: none;
float:left;}

.separatore{
/*font-weight: bold; */
color: blue;
font-size:20px;
margin-top: -40px;
text-decoration: none;
float: left; 
margin-left: 89.8%;}

.form_elogin{
 -webkit-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-moz-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-o-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
/* margin-top: -15%; */
text-align: center;
font-size: 20px;
width: 100%; 
height: 50%;

margin: 0;
font-family: 'Coolvetica Rg';
}

input, input::-webkit-input-placeholder {
    font-size: 20px;
    line-height: 4;}
    
    input.search{
        height: 100px;
        width: 300px;
    }
    
    * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.table{
margin-top: -15%;
margin-left: 78%;
-webkit-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-moz-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-o-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;}


/* .table{
margin-top: -15%;
margin-right: 73%;
-webkit-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-moz-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-o-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;} */

::-webkit-input-placeholder{
text-align: center;
font-weight: bold;
font-size: 15px;}

.pulsanti table:hover{
  -webkit-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-moz-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-o-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;}

.sfuma{
  -webkit-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-moz-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
-o-box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;
box-shadow: inset 5px 5px 10px 0px #FFFFFF,5px -3px 10px 0px #000000;}

::-webkit-input-placeholder{
    font-weight: bold;}
    
:-moz-placeholder{
    font-weight: bold;}
    
:-ms-input-placeholder{
    font-weight: bold;}
    
    @font-face {
    font-family: 'Coolvetica Rg';
    src: url('CoolveticaRg-Regular.eot');
    src: url('CoolveticaRg-Regular.eot?#iefix') format('embedded-opentype'),
        url('CoolveticaRg-Regular.woff2') format('woff2'),
        url('CoolveticaRg-Regular.woff') format('woff'),
        url('CoolveticaRg-Regular.ttf') format('truetype'),
        url('CoolveticaRg-Regular.svg#CoolveticaRg-Regular') format('svg');
    font-weight: normal;
    font-style: normal;
}

    
.coolvetica{
    @import url('https://cdn.titanwar.net/fonts/coolvetica_rg/stylesheet.css);
    

    margin: 0;
    font-family: 'Coolvetica Rg'
}

::placeholder {
  @import url('https://cdn.titanwar.net/fonts/coolvetica_rg/stylesheet.css);

  color: peachpuff;
  font-family: 'Coolvetica Rg';
  font-size: 22px;
}

#search {
     width: 400%;
    /*height: 2em; */
}

</style>

</body>
</html>