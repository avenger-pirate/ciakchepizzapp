
<?php

session_start();
session_unset();
session_destroy();

header("Location: /m/formLogin.php?logout=true&message=Disconnessione%20Riuscita");

?>