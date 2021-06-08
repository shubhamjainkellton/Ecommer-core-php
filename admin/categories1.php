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
                            $cat_id = $_GET['edit'] ;

                            $querry = "SELECT *  from categories where cat_id = {$cat_id} ";
                            $edit_query = mysqli_query($connection , $querry) ; 
                            while($row =mysqli_fetch_assoc($edit_query))
                                {
                                    $cat_id = $row['cat_id'] ;
                                    $cat_title = $row['cat_title'] ;
                            ?>
                                <input value= "<?php if(isset($cat_title)){ echo $cat_title;} ?>"type="text" class= "form-control" name="cat_title" >

                            <?php }}?>
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
