
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
                            ADD Sub category
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

    <label for="Sub_Category_Name">Sub Category Name</label>
    <input type="text" id="Sub_Category_Name" class="form-control mb-4" name="Sub_Category_Name">

    <label for="Sub_Category_ID">Sub Category ID</label>
    <input type="text" id="Sub_Category_ID" class="form-control mb-4" name="Sub_Category_ID" >

    <label for="Description">Subcategory Description</label>
    <input type="text" id="Description" class="form-control mb-4" name="Description">

    <label for="select_3"> Status </label>
    <select class="form-control mb-4" id="Status" name="Status">
    <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>

    </select>
  
    <input class ="btn btn-info btn-block my-4" type="submit" name="ADD" value="ADD" >

</form>

                            <?php
                        if(isset($_POST['ADD']))           
                        { 


                            $Category_name = $_POST['Category_name'];
                            $Sub_Category_Name = $_POST['Sub_Category_Name'];

                            $Sub_Category_ID = $_POST['Sub_Category_ID'];

                            $Description = $_POST['Description'];
                            $Status = $_POST['Status'];

                            
                            $querry = "INSERT INTO `sub_category`(`Category_name`, `Sub_Category_Name`, 
                            `Sub_Category_ID`, `Description`, `Status`) ";
                            $querry .= " VALUES ('{$Category_name}','{$Sub_Category_Name}',  '{$Sub_Category_ID}','{$Description}','{$Status}') ";
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
