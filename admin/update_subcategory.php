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

include "includes/db.php" ;

// To view the pre-filled data in form.
if(isset($_GET['s_no'])){
    $the_category_id = $_GET['s_no'];
}

$query = " SELECT * FROM sub_category WHERE s_no= $the_category_id ";
$select_category_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_category_by_id)){
$Category_Name = $row["Category_Name"];
$Sub_Category_ID = $row["Sub_Category_ID"];
$Sub_Category_Name = $row["Sub_Category_Name"];
$Description = $row["Description"];

$status = $row["status"];
}

?>

<?php

 include "includes/db.php" ;
 
 if(!$connection)
 {
     echo "we are not connected" ;
 }

 if(isset($_POST['done'])){

 $sno = $_GET['s_no'];   
 $Category_Name = $_POST['Category_Name'];
 $Sub_Category_Name = $_POST['Sub_Category_Name'];

 $Sub_Category_ID = $_POST['Sub_Category_ID'];
 $Description = $_POST['Description'];

 //$created_on = $_POST['created_on'];
 $Status = $_POST['Status'];

$query = "UPDATE sub_category SET `s_no` = '{$sno}', `Category_Name` = '{$Category_Name}', `Sub_Category_Name` = '{$Sub_Category_Name}', `Sub_Category_ID` = '{$Sub_Category_ID}',
`Description`='{$Description}',`Status`='{$Status}' WHERE s_no = '{$sno}' ";
 
$query = mysqli_query($connection,$query);

header('location:subcategory.php');
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
                            Update Category 
                        </h1>

               
                        <form action="" method="post" enctype="multipart/form-data" class="border border-light p-5">

<label for="select_1">Category:</label>
<select class="form-control mb-4" id="Category_Name" name="Category_Name">
    <option value="">--- Select ---</option>
    <?php
        $list="SELECT * FROM category ";
        $list1 = mysqli_query($connection , $list) ; 

        while($row_list=mysqli_fetch_assoc($list1))
        {
        
    ?>
        
    <option value="<?php echo $row_list['Category_name']; ?>"
        
    <?php if($row_list['Category_name']==$Category_Name){ echo "selected"; } ?>
        
    >
    <?php echo $row_list['Category_name']; ?>
        
    </option>
        
    <?php
    }
    ?>
</select>

<label for="Sub_Category_Name">Sub Category Name</label>
<input value = "<?php echo $Sub_Category_Name; ?>" type="text" id="Sub_Category_Name" class="form-control mb-4" name="Sub_Category_Name">

<label for="Sub_Category_ID">Sub Category ID</label>
<input value = "<?php echo $Sub_Category_ID; ?>" type="text" id="Sub_Category_ID" class="form-control mb-4" name="Sub_Category_ID" >

<label for="Description">Subcategory Description</label>
<input value = "<?php echo $Description ; ?>" type="text" id="Description" class="form-control mb-4" name="Description">

<label for="select_3"> Status </label>
<select class="form-control mb-4" id="Status" name="Status">
<option value="Active">Active</option>
        <option value="Inactive">Inactive</option>

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

