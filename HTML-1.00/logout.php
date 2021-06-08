<?php 
session_start();

//Free all session variables.
session_unset();
session_destroy();

header("location:login.php");

exit;
?>


