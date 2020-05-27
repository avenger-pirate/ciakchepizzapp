<?php

include("/home1/ciakchep/public_html/m/lib/login.php");

$obj = new login();
echo $obj->access($json);

?>