<?php

include("/home1/ciakchep/public_html/api/lib/login.php");

$obj = new login();
echo $obj->access($json);

?>