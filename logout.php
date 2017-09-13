<?php
session_start();


session_unset();

setcookie(session_name(), '', -1);



session_destroy();
header('LOCATION: index.php');
?> 
