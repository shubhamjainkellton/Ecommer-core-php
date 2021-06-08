<?php
include "includes/db.php";
include 'includes/header.php';

$sno = $_GET['sno'];

$q = " DELETE FROM `category` WHERE sno = $sno ";

mysqli_query($connection, $q);

header('location:category.php');

?>
