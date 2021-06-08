<?php 
session_start();

//Free all session variables.
session_unset();
session_destroy();

header("location:../HTML 1.00/homepage.php");

exit;
