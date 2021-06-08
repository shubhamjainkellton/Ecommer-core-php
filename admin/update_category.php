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
if(isset($_GET['sno'])){
    $the_category_id = $_GET['sno'];
}


$query = "SELECT * FROM category WHERE sno = $the_category_id ";
$select_category_by_id = mysqli_query($connection,$query) ;

while($row = mysqli_fetch_assoc($select_category_by_id)){
$Category_name = $row["Category_name"];
$category_id = $row["category_id"];
$status = $row["status"];
$description = $row["description"];
}

?>

<?php

 include "includes/db.php" ;
 
 if(!$connection)
 {
     echo "we are not connected" ;
 }

 if(isset($_POST['done'])){

 $sno = $_GET['sno'];   
 $category_id = $_POST['category_id'];
 $Category_name = $_POST['Category_name'];
 //$created_on = $_POST['created_on'];
 $updated_on = $_POST['updated_on'];
 $description = $_POST['description'];

$query = "UPDATE category SET sno = '{$sno}', Category_name = '{$Category_name}', category_id = '{$category_id}', description = '{$description}' WHERE sno='{$sno}' ";
 
$query = mysqli_query($connection,$query);

header('location:category.php');
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

               
    <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="Category_name">Category Name</label>
        <input value = "<?php echo $Category_name; ?>" type="text" class ="form-control" name="Category_name">
    </div>
    <div class="form-group">    
        <label for="category_id">category id</label>
        <input value = "<?php echo $category_id; ?>" type="text" class ="form-control" name="category_id">    
    <div class="form-group">
        <label for="status">status </label>
        <input value = "<?php echo $status; ?>" type="text" class ="form-control" name="status">
    </div>

    <div class="form-group">
        <label for="description"> Content</label>
        <input value = "<?php echo $description; ?>" type="text" class ="form-control" name="description">
    </div>
    <div class="form-group" >
    <button class="btn btn-success" type="submit" name="done"> Update </button><br>
    </div>
</form>

                                
                            

                            
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/footer.php" ?>

