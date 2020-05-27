<!DOCTYPE html>
<html>

<?php

$id = session_start();
$cap = 34563;
$nome = "Fabio";
$cognome = "Anacleti";
$indirizzo = "via dei gelsi";
$data = "08/11/1973";
$tel = "+393209876543";
$email = "anacleti@gmail.com";
$psw = "password";
$cf = "ncltfb97e89765T";

echo $form = "
<form action='/api/iscriviti.php' method='GET'>

<input type='hidden' value='$id' name='id' align='center'>
<input type='hidden' value='$cap' name='cap' align='center'>
<input type='hidden' value='$nome' name='nome' align='center'>
<input type='hidden' value='$cognome' name='cognome' align='center'>
<input type='hidden' value='$indirizzo' name='indirizzo' align='center'>
<input type='hidden' value='$data' name='data' align='center'>
<input type='hidden' value='$tel' name='tel' align='center'>
<input type='hidden' value='$email' name='email' align='center'>
<input type='hidden' value='$psw' name='psw' align='center'>
<input type='hidden' value='$cf' name='cf' align='center'>

<button type='submit' name='btn' class='login' align='center'> CLICK </button>
</form>";


?>

</html>