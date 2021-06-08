

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../HTML 1.00/index.php" >Home site</a></li>
                
        
                <!---li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>-->
                        <li class="dropdown">
                    <a href="logout.php" class=""><i class="fa fa-user"></i>Logout</a>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-list-alt"></i> categories <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                        <li>
                        <a href="add_category.php"><i class="fa fa-fw fa-bar-chart-o"></i> Add</a>
                        </li>
                        <li>
                        <a href="./category.php"><i class="fa fa-fw fa-bar-chart-o"></i> all post</a>
                        </li>
                            <?php
                            /*
                                $querry = "SELECT * from categories" ;               

                                $select_categories_sidebar = mysqli_query($connection , $querry);
                                
                                while($row =mysqli_fetch_assoc($select_categories_sidebar))
                                {
                                    $cat_title = $row['cat_title'] ;
                                    echo "<li><a href ='#' >{$cat_title}</a></li>";
                                }*/
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-align-justify"></i> sub category <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                        <li>
                        <a href="add_subcategory.php"><i class="fa fa-fw fa-bar-chart-o"></i> Add</a>
                        </li>
                        <li>
                        <a href="./subcategory.php"><i class="fa fa-fw fa-bar-chart-o"></i> all post</a>
                        </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> products <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                        <li>
                        <a href="add_product.php"><i class="fa fa-fw fa-bar-chart-o"></i> Add</a>
                        </li>
                        <li>
                        <a href="./product.php"><i class="fa fa-fw fa-bar-chart-o"></i> all post</a>
                        </li>
                        </ul>
                    </li>


                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
