<?php
error_reporting(E_ALL);
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
//include "header.php" ;
//echo $_SESSION["email"];
?>
<div style="text-align:center;">
    <h1>Thank you! <?php echo $_SESSION["email"]; ?></h1>
    <p>Your order has been received.</p>
    <p><span id="timer"></span></p>
</div>
<script type="text/javascript">
    var count = 5;
    function countDown(){
        var timer = document.getElementById("timer");
        
    }
    countDown();
</script>
<?
/*
if(isset($_GET['sno'])){
    $Product_s_no = $_GET['sno'];

$query = " SELECT * FROM `add_to_cart` WHERE s_no= $Product_s_no  ";
$select_category_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_category_by_id))
{
    
    $Product_Name = $row["Product_Name"];
    $Product_Image = $row["Product_Image"];
    $Quantity = $row["Quantity"];
    $Offer_Price = $row["Offer_Price"];
    $Product_s_no  = $row["Product_s_no"];


    $price = $Offer_Price*$Quantity;

$query1 =" INSERT INTO `checkout`(`Product_Name`, `product_id`, `price`, `cust_id`) VALUES ('{$Product_Name}','{$Product_s_no}',
'{$price}','{$Offer_Price}','{$_SESSION["sno"]}' ) " ;


 
 $result = mysqli_query($connection, $query1) ;
echo $result;
die();


 header('location:view_add_to_cart.php');

}
}
?>
