<?php
include "db.php";

$sno = $_GET['sno'];

$q = " DELETE FROM `add_to_cart` WHERE s_no  = $sno ";

mysqli_query($connection, $q);

header('location:view_add_to_cart.php');


include 'footer.php';

?>
