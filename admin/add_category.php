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
                        <h1 class="page-header">
                            ADD Category 
                        </h1>

               
    <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="Category_name">Category Name</label>
        <input type="text" class ="form-control" name="Category_name">
    </div>
    <div class="form-group">    
        <label for="category_id">category id</label>
        <input type="text" class ="form-control" name="category_id">    
    </div>
        <div class="form-group">
        <label for="created_on">Created on</label>
        <input type="date" class ="form-control" name="created_on">
    </div>

 

    <div class="form-group">
        <label for="status">status </label>
        <input type="text" class ="form-control" name="status">
    </div>

    <div class="form-group">
        <label for="description"> Content</label>
        <input type="text" class ="form-control" name="description">
    </div>
    <div class="form-group" >
        <input class ="btn btn-primary" type="submit" name="ADD" value="ADD" >
    </div>
</form>

                            <?php
                        if(isset($_POST['ADD']))
                        
                        {
                            $Category_name = $_POST['Category_name'];
                            $Category_id = $_POST['category_id'];
                            $status = $_POST['status'];

                
                            $description = $_POST['description'];
                            $created_on = $_POST['created_on'];




                            $querry = "INSERT INTO `category`(`Category_name`, `category_id`, `created_on`,  `status`, `description`)";
                            $querry .= " Values( '$Category_name', '$Category_id' , '$created_on' ,   '$status' , '$description' ) ";
                            $result = mysqli_query($connection, $querry) ;
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

