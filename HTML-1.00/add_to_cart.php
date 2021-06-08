<?php
 
//session.
session_start();

//if loggedin session is not set or logged is not true.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
  header("location: login.php");
  exit;
}

?>
<?php
include "db.php" ;

if(isset($_GET['s_no'])){
    $Product_s_no = $_GET['s_no'];
    
}
$query = " SELECT * FROM product WHERE s_no= $Product_s_no  ";
$select_category_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_category_by_id))
{
    
    $Product_Name = $row["Product_Name"];
    $Product_Image = $row["Product_Image"];
    $Product_Price = $row["Actual_Price"];
    $Offer_Price = $row["Offer_Price"];
    $Quantity  = $row["Quantity"];



$query1 =" INSERT INTO `add_to_cart`(`Product_Name`, `Product_Image`, `Product_Price`, `Offer_Price`,
 `Quantity`, `Product_s_no`) VALUES ('{$Product_Name}','{$Product_Image}','{$Product_Price}','{$Offer_Price}','{$Quantity}',
 '{$Product_s_no}' ) " ;
 
 $result = mysqli_query($connection, $query1) ;



 header('location:view_add_to_cart.php');

}