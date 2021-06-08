
<?php 
require("db.php"); 
$cat_res = mysqli_query($connection, "SELECT * FROM category WHERE status=1");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
    $cat_arr[]=$row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zenna | Home 1</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/sliders.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <main class="main-wrapper">

    <header class="nav-type-1">

      <!-- Fullscreen search -->
      <div class="search-wrap">
        <div class="search-inner">
          <div class="search-cell">
            <form method="get">
              <div class="search-field-holder">
                <input type="search" class="form-control main-search-input" placeholder="Search for">
                <i class="ui-close search-close" id="search-close"></i>
              </div>            
            </form>
          </div>
        </div>        
      </div> <!-- end fullscreen search -->

     

      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row flex-parent">

              <div class="navbar-header flex-child">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="index.php">
                      <img class="logo-dark" src="img/logo_dark.png" alt="logo">
                    </a>
                  </div>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Mobile cart -->
                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="#" class="nav-cart-icon">
                        <span class="nav-cart-badge">2</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div> <!-- end navbar-header -->

              <div class="nav-wrap flex-child">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                  
                  <ul class="nav navbar-nav">

                    <li class="">
                      <a href="index.php">Home</a>
                      <!--<i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="">
                        <li><a href="index.php">Home</a></li>
                       <li><a href="index-2.html">Home 2</a></li>
                        <li><a href="index-3.html">Home 3</a></li>
                      </ul>
                    </li>-->
                    
                    <?php 
                    //category listing in nav bar.
                    foreach($cat_arr as $list){
                      ?>
                      <li><a hreef="category.php?id=<?php echo $list['Category_name']?>"><?php echo $list['Category_name']?></li>
                    <?php
                    }
                    ?>

                   <li class="dropdown">
                      <a href="#">Zenna Info.</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                        <li><a href="faq.php">F.A.Q</a></li>
                      </ul>
                    </li>

                    <!--<li class="dropdown">
                      <a href="#">Blog</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="blog-standard.html">Standard</a></li>
                        <li><a href="blog-single.html">Single Post</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Shop</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu megamenu-wide">
                        <li>
                          <div class="megamenu-wrap container">
                            <div class="row">

                              <div class="col-md-3 megamenu-item">
                                <ul class="menu-list">
                                  <li>
                                    <span>Shop Pages</span>
                                  </li>
                                  <li><a href="shop-catalog.html">Catalog no Sidebar</a></li>
                                  <li><a href="shop-catalog-sidebar.html">Catalog With Sidebar</a></li>
                                  <li><a href="shop-single.html">Single Product</a></li>
                                  <li><a href="shop-cart.html">Cart</a></li>
                                  <li><a href="shop-checkout.html">Checkout</a></li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <ul class="menu-list">
                                  <li>
                                    <span>For Her</span>
                                  </li>
                                  <li><a href="catalog.html">Dresses</a></li>
                                  <li><a href="catalog.html">Watches</a></li>
                                  <li><a href="catalog.html">Belts</a></li>
                                  <li><a href="catalog.html">Jackets</a></li>
                                  <li><a href="catalog.html">Scarfs</a></li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <ul class="menu-list">
                                  <li>
                                    <span>Accessories</span>
                                  </li>
                                  <li><a href="catalog.html">Wallets</a></li>
                                  <li><a href="catalog.html">Watches</a></li>
                                  <li><a href="catalog.html">Belts</a></li>
                                  <li><a href="catalog.html">Shoes</a></li>
                                  <li><a href="catalog.html">Scarfs</a></li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <ul class="menu-list">
                                  <li>
                                    <span>For Him</span>
                                  </li>
                                  <li><a href="catalog.html">T-shirts</a></li>
                                  <li><a href="catalog.html">Watches</a></li>
                                  <li><a href="catalog.html">Belts</a></li>
                                  <li><a href="catalog.html">Jeans</a></li>
                                  <li><a href="catalog.html">Scarfs</a></li>
                                </ul>
                              </div>

                            </div> 
                          </div>
                        </li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Elements</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="typography.html">Typography</a></li>
                      </ul>
                    </li> <!-- end elements -->


                    <!-- Mobile search -->
                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" class="mobile-search">
                        <input type="search" class="form-control" placeholder="Search...">
                        <button type="submit" class="search-button">
                          <i class="fa fa-search"></i>
                        </button>
                      </form>
                    </li>

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

              <?php
              //if loggedin session is set and logged is true.
              if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
              $loggedin = true;
              } else{
              $loggedin = false;
              }

              if(!$loggedin){
                echo '<div class="flex-child flex-right nav-right hidden-sm hidden-xs">
                      <ul>
                  
                      <li class="dropdown">
                      <a href="#">My Account</a>                    
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="login.php">Login</a>
                          <a class="dropdown-item" href="signup.php">Signup</a>
                          <a class="dropdown-item" href="../admin/login.php">Admin</a>
                        </ul>
                      </li>';}
              else{
                echo '<div class="flex-child flex-right nav-right hidden-sm hidden-xs">
                      <ul>
            
                      <li class="dropdown">
                      <a href="#">My Account</a>                    
                        <ul class="dropdown-menu"> 
                        <li><a href="homepage.php">Logout</a></li>
                        </ul>
                      </li>';}            
                  
?>
             
                    
                 
                 
                 
                 
                 
                 <!-- <li class="nav-cart">
                    <div class="nav-cart-outer">
                      <div class="nav-cart-inner">
                        <a href="#" class="nav-cart-icon">
                          0
                        </a>
                      </div>
                    </div>
                    <div class="nav-cart-container">
                      <div class="nav-cart-items">

                        <div class="nav-cart-item clearfix">
                          <div class="nav-cart-img">
                            <a href="#">
                              <img src="img/shop/shop_item_1.jpg" alt="">
                            </a>
                          </div>
                          <div class="nav-cart-title">
                            <a href="#">
                              Ladies Bag
                            </a>
                            <div class="nav-cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                          </div>
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                        <div class="nav-cart-item clearfix">
                          <div class="nav-cart-img">
                            <a href="#">
                              <img src="img/shop/shop_item_2.jpg" alt="">
                            </a>
                          </div>
                          <div class="nav-cart-title">
                            <a href="#">
                              Sequin Suit longer title
                            </a>
                            <div class="nav-cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                          </div>
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                      </div>  end cart items 

                      <div class="nav-cart-summary">
                        <span>Cart Subtotal</span>
                        <span class="total-price">$1799.00</span>
                      </div>

                      <div class="nav-cart-actions mt-20">
                        <a href="shop-cart.html" class="btn btn-md btn-dark"><span>View Cart</span></a>
                        <a href="shop-checkout.html" class="btn btn-md btn-color mt-10"><span>Proceed to Checkout</span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>-->
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>