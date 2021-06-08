<?php
 
//session.
session_start();

//if loggedin session is not set or logged is not true.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
  
    header("location: login.php");

  exit;
}
?>
<?php include "db.php" ;?>

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
                                    <th>Price</th>
                                    <th>Order Summary</th>
                                    <th>Delete</th>
                                </tr>
                            </thread>

                            <?php
                                $querry = "SELECT *  from checkout ";
                                $post_query = mysqli_query($connection , $querry) ; 
                                while($row =mysqli_fetch_assoc($post_query))
                                    {
                                        $s_no  = $row['s_no'] ;
                                        $Product_Name = $row['Product_Name'] ;
                                        $product_id = $row['product_id'] ;
                                        $price = $row['price'] ;
                                        $cust_id = $row['cust_id'] ;
                                        #  $Order_Summary = $row['Order_Summary'] ;
                                        
                                        ?>
                                        <tbody>
                                                <tr>
                                                    <td><?php echo $s_no;?></td>
                                                    <td><?php echo $Product_Name;?></td>
                                                    <td><?php echo $product_id;?></td>
                                                    <td><?php echo $price;?></td>
                                                    <td><?php echo $cust_id; ?></td>
                                                
                                                    <td><a href="delete_add_to_cart.php?sno=<?php echo $s_no?>"> Delete </a></td>

                                                 </tr>
                                        </tbody>

                                         <?php
                                    } ?>
        </table>
</div>
 <?php include "footer.php" ;
