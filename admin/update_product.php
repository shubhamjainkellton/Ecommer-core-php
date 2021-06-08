<?php 

include "includes/db.php" ;

// To view the pre-filled data in form.
if(isset($_GET['s_no'])){
    $the_category_id = $_GET['s_no'];
}


$query = " SELECT * FROM product WHERE s_no= $the_category_id ";
$select_category_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_category_by_id)){

$Category_name = $row["Category_name"];
$Sub_Category_Name = $row["Sub_Category_Name"];

$Quantity  = $row["Quantity"];
$Product_Name = $row["Product_Name"];
$Product_Id = $row["Product_Id"];
$Product_Description = $row["Product_Description"];
$Product_Image = $row["Product_Image"];
$Specification = $row["Specification"];
$Actual_Price = $row["Actual_Price"];
$Offer_Price = $row["Offer_Price"];
$is_it_returnable = $row["is_it_returnable"];
$Delivery_Duration = $row["Delivery_Duration"];

}

?>

<?php

 include "includes/db.php" ;
 
 if(!$connection)
 {
     echo "we are not connected" ;
 }

 if(isset($_POST['done'])){

 $s_no = $_GET['s_no'];   
 $Category_name = $_POST['Category_name'];
 $Sub_Category_Name = $_POST['Sub_Category_Name'];

 $Quantity  = $_POST['Quantity'];
 $Product_Name = $_POST['Product_Name'];
 $Product_Id = $_POST['Product_Id'];
 $Product_Description = $_POST['Product_Description'];
 $post_image = $_FILES["image"]["name"];
 $post_image_temp = $_FILES["image"]["tmp_name"];

 move_uploaded_file($post_image_temp,__DIR__. "/images/$post_image");
  $Specification = $_POST['Specification'];

 $Actual_Price = $_POST['Actual_Price'];
 $Offer_Price = $_POST['Offer_Price'];
 $is_it_returnable = $_POST['is_it_returnable'];
 $Delivery_Duration = $_POST['Delivery_Duration'];



 //$created_on = $_POST['created_on'];


$query = " UPDATE `product` SET `s_no`='{$s_no}',`Category_name`='{$Category_name}',`Quantity`='{$Quantity}',
`Product_Name`='{$Product_Name}',`Product_Id`='{$Product_Id}',`Product_Description`='{$Product_Description}',`Product_Image`='{$post_image}',
`Specification`='{$Specification}',`Actual_Price`='{$Actual_Price}',`Offer_Price`='{$Offer_Price}',`is_it_returnable`='{$is_it_returnable}',
`Delivery_Duration`='{$Delivery_Duration}',,`Sub_Category_Name`='{$Sub_Category_Name}' WHERE s_no='{$s_no}' ";
$query = mysqli_query($connection,$query);

header('location:product.php');
 }

?>

<?php include "includes/header.php" ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update product 
                        </h1>

               
                        <form action="" method="post" enctype="multipart/form-data" class="border border-light p-5">

<label for="select_1">Category:</label>
<select class="form-control mb-4" id="Category_name" name="Category_name">
    <option value="">--- Select ---</option>
    <?php
        $list="SELECT * FROM category ";
        $list1 = mysqli_query($connection , $list) ; 

        while($row_list=mysqli_fetch_assoc($list1))
        {
        
    ?>
        
    <option value="<?php echo $row_list['Category_name']; ?>"
    <?php if($row_list['Category_name']==$Category_name){ echo "selected"; } ?>

    >
        
        
    <?php echo $row_list['Category_name']; ?>
        
    </option>
        
    <?php
    }
    ?>
</select>


    <label for="select_2">Sub Category:</label>
    <select class="form-control mb-4" id="Sub_Category_Name" name="Sub_Category_Name">
        <option value="">--- select--</option>
        <?php
      
            $list="SELECT * FROM sub_category ";
            $list1 = mysqli_query($connection , $list) ; 

            while($row_list=mysqli_fetch_assoc($list1))
            {
            
        ?>
            
        <option value="<?php echo $row_list['Sub_Category_Name']; ?>"
        <?php if($row_list['Sub_Category_Name']==$Sub_Category_Name){ echo "selected"; } ?>

        >
            
            
        <?php echo $row_list['Sub_Category_Name']; ?>
            
        </option>
            
        <?php
        }
        ?>
    </select>

    <label for="select_1">Select Quantity:</label>
<select class="form-control mb-4" id="Quantity" name="Quantity">
    <?php
    for($i=1 ; $i<=10 ;$i++)
    {?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

    <?php  } ?>
    </select>


<label for="Product_Name">Product Name</label>
<input value = "<?php echo $Product_Name; ?>" type="text" id="Product_Name" class="form-control mb-4" name="Product_Name">

<label for="Product_Id">Product Id</label>
<input value = "<?php echo $Product_Id; ?>" type="text" id="Product_Id" class="form-control mb-4" name="Product_Id" >

<label for="Product_Description">Product Description</label>
<input value = "<?php echo $Product_Description; ?>" type="text" id="Product_Description" class="form-control mb-4" name="Product_Description">

<div class="input-group mb-4">  
    <div class="input-group-prepend">
    </div>
    <div class="Product Image">
        <label class="custom-file-label" for="image">Product Image</label>  
        <input  type="file" class="custom-file-input" id="image"  name="image"><?php echo $Product_Image; ?>

    </div>
</div>


<label for="Specification">Specification</label>
<textarea id="Specification" class="form-control mb-4" name="Specification"><?php echo $Specification; ?></textarea>

<label for="Actual_Price">Actual Price</label>
<input value = "<?php echo $Actual_Price; ?>" type="text" id="Actual_Price" class="form-control mb-4" name="Actual_Price">

<label for="Offer_Price">Offer Price</label>
<input value = "<?php echo $Offer_Price; ?>" type="text" id="Offer_Price" class="form-control mb-4" name="Offer_Price">

<label for="select_3">Is it returnable? </label>
<select value = "<?php echo $is_it_returnable; ?>" class="form-control mb-4" id="is_it_returnable" name="is_it_returnable">
<option value="Yes">Yes</option>
        <option value="No">No</option>

</select>

<label for="select_4">Delivery Duration:</label>
<select value = "<?php echo $is_it_returnable;?>"  class="form-control mb-4" id="Delivery_Duration" name="Delivery_Duration">
<?php
    for($i=0 ; $i<=60 ;$i++)
    {?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

    <?php  } ?>
 </select>

<input class ="btn btn-info btn-block my-4" type="submit" name="done" value="done" >

</form>

                                
                            

                            
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/footer.php" ?>

