<?php include "includes/db.php"; ?> 
<?php include "includes/header.php" ?>
<?php  
/*
Active and Deactive Button.

if(isset($_GET['type']) && $_GET['type'] !=''){
    $type = $_GET['type'];
    if($type=='status'){
        $operation=$_GET['operation'];
        $sno=$_GET['sno'];
        if($operation=='active'){
            $status='1';
        }else{
            $status='0';
        }
        $update_status="UPDATE category SET status=='$status' WHERE sno='$sno' ";
        mysqli_query($connection,$update_status);
    }
}
*/
?>
                        

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small>Author</small>
                        </h1>

                        <table class="table table-bordered table-hover">
                            <thread>
                                <tr>
                                    <th>S.no</th>
                                    <th>Category Name</th>
                                    <th>SubCategory Name	</th>
                                    <th>Category ID</th>
                                    <th>Created On</th>
                                    <th>Updated On</th>
                                    <th>Description</th>
                                    <th>status</th>
                                    <th>Delete</th>
                                    <th>Update</th>
                                </tr>
                            </thread>

                        <?php
                            $querry = "SELECT *  from sub_category ";
                            $post_query = mysqli_query($connection , $querry) ; 
                            while($row =mysqli_fetch_assoc($post_query))
                                {
                                    $s_no  = $row['s_no'] ;
                                    $Sub_Category_ID = $row['Sub_Category_ID'] ;
                                    $Category_Name = $row['Category_Name'] ;
                                    $Sub_Category_Name = $row['Sub_Category_Name'] ;
                                    $created_on = $row['Created_on'] ;
                                    $updated_on = $row['Updated_On'] ;
                                    $description = $row['Description'] ;
                                    $status = $row['Status'] ;
                                    
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $s_no;?></td>
                                <td><?php echo $Category_Name;?></td>
                                <td><?php echo $Sub_Category_Name;?></td>
                                <td><?php echo $Sub_Category_ID;?></td>
                                <td><?php echo $created_on; ?></td>
                                <td><?php echo $updated_on; ?>' </td>
                                <td><?php echo $description; ?></td>
                                <td><?php echo $status; ?></td>
                                
                                <td><a href="delete_subcategory.php?sno=<?php echo $s_no?>"> Delete </a></td>
                                <td><a href ="update_subcategory.php?s_no=<?php echo $s_no?>">Update</a></td>


                            </tr>
                        </tbody>

                            <?php } ?>
                        </table>





















                        

                        <!--<div class="col-xs-6" >
                        <form action=" " method="post" >
                        <div class="form-group" >
                            <label for ="cat-titled" >Add Categories</label>

                            
                            <input type="text" class= "form-control" name="cat_title" >
                        </div>
                        <div class="form-group" >
                            <input class ="btn btn-primary" type="submit" name="submit" value="Add category" >
                        </div>
                        </form>
                        </div>

                        <div class="col-xs-6" >
                        <form action=" " method="post" >
                        <div class="form-group" >
                            <label for ="cat-titled" >Edit Categories</label>
                            <?php /*
                        if(isset($_GET['edit']))
                            
                        {
                            $cat_id = $_GET['edit_post'] ;

                            $querry = "SELECT *  from categories where post_id = {$cat_id} ";
                            $edit_query = mysqli_query($connection , $querry) ; 
                            while($row =mysqli_fetch_assoc($edit_query))
                                {
                                    $post_id = $row['post_id'] ;
                                    $post_author = $row['post_author'] ;
                                    $post_date = $row['post_date'] ;
                                    $post_image = $row['post_image'] ;
                                    $post_title = $row['post_title'] ;
                                    $post_category_id = $row['post_category_id'] ;
                                    $post_tags = $row['post_tags'] ;
                                    $post_content = $row['post_content'] ;


                                    $cat_id = $row['cat_id'] ;
                                    $cat_title = $row['cat_title'] ; */
                            ?>
                                <input value= "<?php //if(isset($post_title)){ echo $post_title;} ?>"type="text" class= "form-control" name="post_title" >
                                <input value= "<?php //if(isset($post_author)){ echo $post_author;} ?>"type="text" class= "form-control" name="post_author" >
                                <input value= "<?php //if(isset($post_date)){ echo $post_date;} ?>"type="text" class= "form-control" name="post_date" >
                                <input value= "<?php //if(isset($post_image)){ echo $post_image;} ?>"type="text" class= "form-control" name="post_image" >
                                <input value= "<?php //if(isset($post_category_id)){ echo $post_category_id;} ?>"type="text" class= "form-control" name="post_category_id" >
                                <input value= "<?php //if(isset($post_tags)){ echo $post_tags;} ?>"type="text" class= "form-control" name="post_tags" >
                                <input value= "<?php //if(isset($post_content)){ echo $post_content;} ?>"type="text" class= "form-control" name="post_content" >


                            <?php # }}
                            ?>
                            <input type="text" class= "form-control" name="cat_title" >
                        </div>
                        <div class="form-group" >
                            <input class ="btn btn-primary" type="submit" name="update" value="update" >
                        </div>
                        </form>
                        </div>

                        <?php /*
                        if(isset($_POST['submit']))
                        {
                            $cat_title = $_POST['cat_title'] ;

                            if($cat_title == "" || empty($cat_title))
                            {
                                    echo "this field should not be empty";
                            }
                            else
                            {

                                $querry = "INSERT INTO  categories (cat_title) VALUE ('$cat_title')" ;
                                $create_category =  mysqli_query($connection , $querry);
                                
                                if(!$create_category)
                                {
                                    die("querry failed" . mysqli_error($connection));
                                }
                            }
                        }
                        else if(isset($_POST['update']))
                        {
                            $cat_title = $_POST['cat_title'] ;

                            if($cat_title == "" || empty($cat_title))
                            {
                                    echo "this field should not be empty";
                            }
                            else
                            {

                                $querry = "UPDATE  categories SET cat_title ='{$cat_title}' WHERE cat_id = {$cat_id} " ;
                                $update_category =  mysqli_query($connection , $querry);
                                
                                if(!$update_category)
                                {
                                    die("querry failed" . mysqli_error($connection));
                                }
                            }
                        }*/
                        ?>
                        <div class="col-xs-6">
                        <?php
                                //$querry = "SELECT * from categories" ;               

                                //$select_categories_sidebar = mysqli_query($connection , $querry);
                                                     
                            ?>
                            <table class="table table-bordered table-hover">
                                <thread>
                                    <tr>
                                        <th> ID</th>
                                        <th>Categories title</th>
                                        <th>click to Delete</th>
                                        <th>click to Edit</th>


                                    </tr>
                                </thread>
                                <tbody>
                                <?php
                                //while($row =mysqli_fetch_assoc($select_categories_sidebar))
                                {
                                    //$cat_id = $row['cat_id'] ;
                                    //$cat_title = $row['cat_title'] ;

                                
                                ?>
                                <tr>
                                    <td><?php //echo $cat_id ?></td>
                                    <td><?php //echo $cat_title ?></td>
                                    <td><a href ='index.php?delete=<?php echo $cat_id?>'>Delete</a></td>
                                    <td><a href ='index.php?edit=<?php echo $cat_id?>'>Edit</a></td>

                                   <td><a href ='index.php?delete=<?php $cat_id?>'>delete</a></td>    wrong line-->


                                </tr>
                            <?php    
                            }
                            ?>
                                </tbody>
                                
                            </table>
                            
                        <!--<ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                 /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/footer.php" ?>
