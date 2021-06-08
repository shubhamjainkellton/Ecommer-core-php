<?php
include "includes/db.php";
include 'includes/header.php';

$s_no = $_GET['s_no'];

$q = " DELETE FROM `product` WHERE s_no  = $s_no ";

mysqli_query($connection, $q);

header('location:product.php');

?>
