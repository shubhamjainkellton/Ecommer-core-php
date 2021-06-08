<?php include "includes/db.php"; ?> <?php include "includes/header.php" ?>
<?php
                        if(isset($_GET['delete']))
                            
                        {
                            $the_cat_title = $_GET['delete'] ;

                            $querry = "DELETE from categories where cat_id = {$the_cat_title} ";
                            $delete_query = mysqli_query($connection , $querry) ; 
                            header("location:categories.php");

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
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/footer.php" ?>
