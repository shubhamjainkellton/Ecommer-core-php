<?php
 
//session.
session_start();

//if loggedin session is not set or logged is not true.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
  header("location: login.php");
  exit;
}
?>
<?php include "includes/db.php"; ?> <?php include "includes/header.php" ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            ADD Product 
                        </h1>

               
                        
<form action="" method="post" enctype="multipart/form-data" class="border border-light p-5">

    <label for="select_1">Category:</label>
    <select class="form-control mb-4" id="Category_name" name="Category_name">
        <option value="">--- Select ---</option>
        <?php
           $select="";
            $list="SELECT * FROM category ";
            $list1 = mysqli_query($connection , $list) ; 

            while($row_list=mysqli_fetch_assoc($list1))
            {
            
        ?>
            
        <option value="<?php echo $row_list['Category_name']; ?>">
            
        <?php if($row_list['Category_name']==$select){ echo "selected"; } ?>
            
        <?php echo $row_list['Category_name']; ?>
        </option>

        <?php
        }
        ?>
    </select>

    <label for="select_2">Sub Category:</label>
    <select class="form-control mb-4" id="Sub_Category_Name" name="Sub_Category_Name">
        <option value="">--- Select ---</option>
        <?php
           $select1="";
            $list="SELECT * FROM sub_category  ";
            $list1 = mysqli_query($connection , $list) ; 

            while($row_list=mysqli_fetch_assoc($list1))
            {
            
        ?>
            
        <option value="<?php echo $row_list['Sub_Category_Name']; ?>">
            
        <?php if($row_list['Sub_Category_Name']==$select1){ echo "selected"; } ?>
            
        <?php echo $row_list['Sub_Category_Name']; ?>
            
        </option>
            
        <?php
        }
        ?>
    </select>

    <label for="select_1">Select Quantity:</label>
    <select class="form-control mb-4" id="Quantity" name="Quantity">
        <?php
        for($i=0 ; $i<=10 ;$i++)
        {?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

        <?php  } ?>
        </select>


    <label for="Product_Name">Product Name</label>
    <input type="text" id="Product_Name" class="form-control mb-4" name="Product_Name">

    <label for="Product_Id">Product Id</label>
    <input type="text" id="Product_Id" class="form-control mb-4" name="Product_Id" >

    <label for="Product_Description">Product Description</label>
    <input type="text" id="Product_Description" class="form-control mb-4" name="Product_Description">

    <div class="input-group mb-4">  
        <div class="input-group-prepend">
        </div>
        <div class="Product Image">
            <label class="custom-file-label" for="image">Product Image</label>  
            <input type="file" class="custom-file-input" id="image"  name="image">
        </div>
    </div>

    <label for="Specification">Specification</label>
    <textarea id="Specification" class="form-control mb-4" name="Specification"></textarea>

    <label for="Actual_Price">Actual Price</label>
    <input type="text" id="Actual_Price" class="form-control mb-4" name="Actual_Price">

    <label for="Offer_Price">Offer Price</label>
    <input type="text" id="Offer_Price" class="form-control mb-4" name="Offer_Price">

    <label for="select_3">Is it returnable? </label>
    <select class="form-control mb-4" id="is_it_returnable" name="is_it_returnable">
    <option value="Yes">Yes</option>
            <option value="No">No</option>

    </select>

    <label for="select_4">Delivery Duration:</label>
    <select class="form-control mb-4" id="Delivery_Duration" name="Delivery_Duration">
    <?php
        for($i=0 ; $i<=60 ;$i++)
        {?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

        <?php  } ?>
     </select>

    <input class ="btn btn-info btn-block my-4" type="submit" name="ADD" value="ADD" >

</form>

                            <?php
                        if(isset($_POST['ADD']))           
                        { 


                            $Category_name = $_POST['Category_name'];

                            $Sub_Category_Name = $_POST['Sub_Category_Name'];

                            $Quantity = $_POST['Quantity'];

                            $Product_Name = $_POST['Product_Name'];

                            $Delivery_Duration = $_POST['Delivery_Duration'];
                            $Product_Id = $_POST['Product_Id'];


                            $Product_Description = $_POST['Product_Description'];
                            $Specification = $_POST['Specification'];
                            $is_it_returnable = $_POST['is_it_returnable'];


                            $Actual_Price = $_POST['Actual_Price'];
                            $Offer_Price = $_POST['Offer_Price'];

                            $post_image = $_FILES["image"]["name"];
                            $post_image_temp = $_FILES["image"]["tmp_name"];

                            move_uploaded_file($post_image_temp,__DIR__. "/images/$post_image");


                            $querry = "INSERT INTO `product`(`Category_name`, `Quantity`, 
                            `Product_Name`, `Product_Id`, `Product_Description`, `Product_Image`, `Specification`, `Actual_Price`,
                             `Offer_Price`, `is_it_returnable`, `Delivery_Duration`,`Sub_Category_Name` ) ";
                            $querry .= " VALUES ('{$Category_name}','{$Quantity}',  '{$Product_Name}','{$Product_Id}','{$Product_Description}',
                            '{$post_image}','{$Specification}','{$Actual_Price}','{$Offer_Price}','{$is_it_returnable}','{$Delivery_Duration}','{$Sub_Category_Name}' ) ";
                            $result = mysqli_query($connection, $querry) ;
                            if(!$result)
                                {
                                    die("querry failed" . mysqli_error($connection));
                                }
                        }   
                            ?>
                                
                            

                            
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                           
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/footer.php" ?>
