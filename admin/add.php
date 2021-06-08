
<?php include "includes/db.php"; ?> <?php include "includes/header.php" ?>
<?php
                        if(isset($_GET['delete']))
                            
                        {
                            $the_cat_title = $_GET['delete'] ;

                            $querry = "DELETE from categories where cat_id = {$the_cat_title} ";
                            $delete_query = mysqli_query($connection , $querry) ; 
                            header("location:index.php");

                        }
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
                            <small>admin</small>
                        </h1>
                        <form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="title">Post title</label>
    <input type="text" class ="form-control" name="title">
</div>
<div class="form-group">
<label for="post_Category_id">Post category</label>
    <input type="text" class ="form-control" name="post_Category_id">
</div>
<div class="form-group">
<label for="author">Post Author</label>
    <input type="text" class ="form-control" name="author">
</div>

<div class="radio ">
<label for="post_status">Post Status</label>
<label><input type="radio"name="optradio" value="Draft"> Draft</label>
<label><input type="radio" name="optradio"value="published">published</label>
</div>


<div class="form-group">
<label for="post_image">Post Image</label>
    <input type="file" class ="form-control" name="post_image">
</div>
<div class="form-group">
<label for="post_tags">Post Tags</label>
    <input type="text" class ="form-control" name="post_tags">
</div>
<div class="form-group">
<label for="post_date">Post date</label>
    <input type="date" class ="form-control" name="post_date">
</div>
<div class="form-group">
<label for="post_content">Post Content</label>
    <input type="text" class ="form-control" name="post_content">
</div>
<div class="form-group" >
<input class ="btn btn-primary" type="submit" name="ADD" value="ADD" >
</div>
</form>

                            <?php
                        if(isset($_POST['ADD']))
                        
                        {
                            $title = $_POST['title'];
                            $post_Category_id = $_POST['post_Category_id'];
                            $author = $_POST['author'];
                            $post_status = $_POST['post_status'];
                            $post_tags = $_POST['post_tags'];
                            $post_content = $_POST['post_content'];
                            $post_date = $_POST['post_date'];

                            $post_image = $_FILES['post_image']['name'];



                            $querry = "INSERT INTO `posts`( `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`)";
                            $querry .= " Values( '$post_Category_id', '$title' , '$author' , '$post_date' ,  '$post_image' , '$post_content' , '$post_tags') ";
                            $result = mysqli_query($connection, $querry) ;
                        }   
                            ?>
                                
                            

                        <?php
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
                        }
                        ?>
                        <div class="col-xs-6">
                        <?php
                                $querry = "SELECT * from categories" ;               

                                $select_categories_sidebar = mysqli_query($connection , $querry);
                                                     
                            ?>
                            <table class="table table-bordered table-hover">
                                <thread>
                                    <tr>
                                        <th> ID</th>
                                        <th>Categories title</th>
                                    </tr>
                                </thread>
                                <tbody>
                                <?php
                                while($row =mysqli_fetch_assoc($select_categories_sidebar))
                                {
                                    $cat_id = $row['cat_id'] ;
                                    $cat_title = $row['cat_title'] ;

                                
                                ?>
                                <tr>
                                    <td><?php echo $cat_id ?></td>
                                    <td><?php echo $cat_title ?></td>
                                    <td><a href ='index.php?delete=<?php echo $cat_id?>'>delete</a></td>
                                    <td><a href ='index.php?edit=<?php echo $cat_id?>'>edit</a></td>

                               <!--     <td><a href ='index.php?delete=<?php $cat_id?>'>delete</a></td>    wrong line-->


                                </tr>
                            <?php    
                            }
                            ?>
                                </tbody>
                                
                            </table>
                            
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
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

