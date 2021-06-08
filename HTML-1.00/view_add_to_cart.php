<?php
 
//session.
session_start();

//if loggedin session is not set or logged is not true.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
  header("location: login.php");
  exit;
}
?>
<?php include "header.php" ;
include "db.php"; ?>  

<style>
h1 {text-align: center;}

</style>
<h1>CART </h1>
<div>
    <table class="table table-bordered table-hover-sm">
                            <thread>
                                <tr>
                                    <th>S no</th>
                                    <th>Product Name</th>
                                    <th>Product ID</th>
                                    <th>Product Image</th>
                                    <th>Product Price</th>
                                    <th>Offer Price</th>
                                    <th>Quantity</th>
                                    <th>Order Summary</th>
                                    <th>Delete</th>
                                </tr>
                            </thread>

                            <?php
                                $querry = "SELECT *  from add_to_cart ";
                                $post_query = mysqli_query($connection , $querry) ; 
                                while($row =mysqli_fetch_assoc($post_query))
                                    {
                                        $s_no  = $row['s_no'] ;
                                        $Product_Name = $row['Product_Name'] ;
                                        $Product_Image = $row['Product_Image'] ;
                                        $Product_Price  = $row['Product_Price'] ;
                                        $Offer_Price = $row['Offer_Price'] ;
                                        $Quantity = $row['Quantity'] ;
                                        $Order_Summary = $row['Order_Summary'] ;
                                        $Product_s_no = $row['Product_s_no'] ;
                                        
                                        ?>
                                        <tbody>
                                                <tr>
                                                    <td><?php echo $s_no;?></td>
                                                    <td><?php echo $Product_Name;?></td>
                                                    <td><?php echo $Product_s_no;?></td>
                                                    <td><?php echo $Product_Image;?></td>
                                                    <td><?php echo $Product_Price; ?></td>
                                                    <td><?php echo $Offer_Price; ?>' </td>
                                                    <td><?php echo $Quantity; ?></td>
                                                    <td><?php echo $Order_Summary; ?></td>
                                                    
                                                    <td><a href="delete_add_to_cart.php?sno=<?php echo $s_no?>"> Delete </a></td>
                                                    <td><a href="add_checkout.php?sno=<?php echo $s_no?>"> Check Out </a></td>
                                                 </tr>
                                        </tbody>

                                         <?php
                                    } ?>
        </table>
</div>
 <?php include "footer.php" ;
