<?php include "includes/db.php"; ?> <?php include "includes/header.php" ?>
<?php
                        if(isset($_GET['delete_post']))
                            
                        {
                            $the_post_title = $_GET['delete_post'] ;

                            $querry = "DELETE from comment where comment_id  = {$the_post_title} ";
                            $delete_query = mysqli_query($connection , $querry) ; 
                            header("location:comment.php");

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
                            <small>Author</small>
                        </h1>

                        <table class="table table-bordered table-hover">
                            <thread>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Comment</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>In response to</th>
                                    <th>Date</th>
                                    <th>Approve</th>
                                    <th>Unapprove</th>




                                </tr>
                            </thread>

                        <?php
                            $querry = "SELECT *  from Comment  ";
                            $post_query = mysqli_query($connection , $querry) ; 
                            while($row =mysqli_fetch_assoc($post_query))
                                {
                                    $comment_id  = $row['comment_id'] ;
                                    $comment_post_id = $row['comment_post_id'] ;
                                    $comment_author = $row['comment_author'] ;
                                    $comment_email = $row['comment_email'] ;
                                    $comment_content = $row['comment_content'] ;
                                    $comment_status = $row['comment_status'] ;
                                    $comment_date = $row['comment_date'] ;


                                    
                            ?>
                        <tbody>
                            <tr>
                                <td><?php echo $comment_id;?></td>
                                <td><?php echo $comment_post_id;?></td>
                                <td><?php echo $comment_author;?></td>
                                <td><?php echo $comment_email; ?></td>
                                <td><?php echo $comment_status; ?></td>
                                <td><?php echo $comment_content; ?></td>
                                <td><?php echo $comment_date; ?></td>

                                <td><a href ='comment.php?edit_post=<?php echo $comment_id?>'>Approve</a></td>
                                <td><a href ='comment.php?delete_post=<?php echo $comment_id?>'>Unapprove</a></td>


                            </tr>
                        </tbody>

                            <?php } ?>
                        </table>

                        <div class="col-xs-6" >
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
                            <?php
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
                                    $cat_title = $row['cat_title'] ;
                            ?>
                                <input value= "<?php if(isset($post_title)){ echo $post_title;} ?>"type="text" class= "form-control" name="post_title" >
                                <input value= "<?php if(isset($post_author)){ echo $post_author;} ?>"type="text" class= "form-control" name="post_author" >
                                <input value= "<?php if(isset($post_date)){ echo $post_date;} ?>"type="text" class= "form-control" name="post_date" >
                                <input value= "<?php if(isset($post_image)){ echo $post_image;} ?>"type="text" class= "form-control" name="post_image" >
                                <input value= "<?php if(isset($post_category_id)){ echo $post_category_id;} ?>"type="text" class= "form-control" name="post_category_id" >
                                <input value= "<?php if(isset($post_tags)){ echo $post_tags;} ?>"type="text" class= "form-control" name="post_tags" >
                                <input value= "<?php if(isset($post_content)){ echo $post_content;} ?>"type="text" class= "form-control" name="post_content" >


                            <?php }}
                            ?>
                            <input type="text" class= "form-control" name="cat_title" >
                        </div>
                        <div class="form-group" >
                            <input class ="btn btn-primary" type="submit" name="update" value="update" >
                        </div>
                        </form>
                        </div>

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
                                        <th>click to Delete</th>
                                        <th>click to Edit</th>


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
                                    <td><a href ='index.php?delete=<?php echo $cat_id?>'>Delete</a></td>
                                    <td><a href ='index.php?edit=<?php echo $cat_id?>'>Edit</a></td>

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
