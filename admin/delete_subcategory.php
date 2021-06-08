<?php
include "includes/db.php";
include 'includes/header.php';

$sno = $_GET['sno'];

$q = " DELETE FROM `sub_category` WHERE s_no = $sno ";

mysqli_query($connection, $q);

header('location:subcategory.php');

?>
