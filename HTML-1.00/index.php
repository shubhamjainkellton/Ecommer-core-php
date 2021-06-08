<?php
 
//session.
session_start();

//if loggedin session is not set or logged is not true.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
  header("location: login.php");
  exit;
}
?>

<?php include "functions.php" ;?>

<?php include "header.php" ;?>



    <div class="content-wrapper oh">

      <!-- Hero Slider -->
      <section class="hero-wrap text-center relative">
        <div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
          <div class="hero-slide overlay" style="background-image:url(img/hero/1.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Great Fashion 2021</h1>
                  <h2 class="hero-subtitle lines">New Arrivals Collection</h2>
                  <div class="buttons-holder">
                    <!--<a href="#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hero-slide overlay" style="background-image:url(img/hero/2.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Exclusive Products</h1>
                  <h2 class="hero-subtitle lines">Get awesome items only in Zenna online shop</h2>
                  <div class="buttons-holder">
                    <!--<a href="#" class="btn btn-lg btn-color"><span>Buy it Now</span></a>-->
                    <!--<a href="#" class="btn btn-lg btn-transparent"><span>Learn More</span></a>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hero-slide overlay" style="background-image:url(img/hero/3.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Enjoy Online Shopping</h1>
                  <h2 class="hero-subtitle lines">Zenna is Your One Shopping Destination.</h2>
                  <div class="buttons-holder">
                  <!--<a href="#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- end hero slider -->

      <!-- Promo Banners 
      <section class="section-wrap promo-banners pb-30">
        <div class="container">
          <div class="row">

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
              <a href="#">
                <img src="img/shop/collection_1.jpg" alt="">
                <div class="overlay"></div>
                <div class="promo-inner valign">
                  <h2>for her</h2>
                  <span>Best Selling Deals</span>
                </div>
              </a>                        
            </div>

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
              <a href="#">
                <img src="img/shop/collection_2.jpg" alt="">
                <div class="overlay"></div>
                <div class="promo-inner valign">
                  <h2>accessories</h2>
                  <span>Hot Trends</span>
                </div>
              </a>                        
            </div>

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
              <a href="#">
                <img src="img/shop/collection_3.jpg" alt="">
                <div class="overlay"></div>
                <div class="promo-inner valign">
                  <h2>for him</h2>
                  <span>New Collection</span>
                </div>
              </a>                        
            </div>
            
          </div>
        </div>
      </section> <!-- end promo banners -->


      <!-- Trendy Products -->
</br><section class="section-wrap-sm new-arrivals pb-50">
        <div class="container">

          <div class="row heading-row">
            <div class="col-md-12 text-center">
              <span class="subheading">Hot items of this year</span></br>
              <h2 class="heading bottom-line">
                Trendy Products
              </h2>
            </div>
          </div>

          

          <?php 
          /*
          $get_product=get_product($connection,'latest',3);
          foreach($get_product as $list){
          ?>
          <h2>
                <a href="shop-single.php?s_no=<?php echo "Product SNo.".$s_no?>">Product SNo.</a>
                </h2>
                <img class="img-responsive" width = 350 src="../admin/images/<?php echo $Product_Image ?> " alt=""> 
                <h2>
                <?php  echo $list['Product_Name'] ?>
                </h2>
                <h2>
                <?php  echo "Product Specifications: ".$Specification ?>
                </h2>
                <?php  echo "Actual Price: ". $Actual_Price ?><br>
                <?php  echo "Offered Price: ".$Offer_Price ?>
                <?php  echo "Returnable: ". $is_it_returnable ?>
                <p><span class="glyphicon glyphicon-time"></span> <?php   echo "Product ID: ".$Product_Id ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $Product_Image ?> " alt="">
                <hr>
                <h3>
                <p><?php  echo "Product Description: ".$Product_Description ?></p>
                </h3>
                <hr>
            <?php }*/ ?>
            <?php
            include "db.php";
            
            $query = "SELECT * FROM product";
            $select_all_products_query = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_all_products_query)) {
                $s_no = $row["s_no"];
                $Category_name = $row["Category_name"];
                $Quantity = $row["Quantity"];
                $Product_Name = $row["Product_Name"];
                $Product_Id = $row["Product_Id"];
                $Product_Description = $row["Product_Description"];
                $Product_Image = $row["Product_Image"];
                $Specification = $row["Specification"];
                $Actual_Price = $row["Actual_Price"];
                $Offer_Price = $row["Offer_Price"];
                $is_it_returnable = $row["is_it_returnable"];
                $Delivery_Duration = $row["Delivery_Duration"];
            
                ?>

                <h2>
                <a href="shop-single.php?s_no=<?php echo $s_no?>">Product SNo.</a>
                </h2>
                <img class="img-responsive" width = 350 src="../admin/images/<?php echo $Product_Image ?> " alt=""> 
                <h2>
                <?php  echo "Product Name: ".$Product_Name ?>
                </h2>
                <h2>
                <?php  echo "Product Specifications: ".$Specification ?>
                </h2>
                <?php  echo "Actual Price: ". $Actual_Price ?><br>
                <?php  echo "Offered Price: ".$Offer_Price ?>
                <?php  echo "Returnable: ". $is_it_returnable ?>
                <p><span class="glyphicon glyphicon-time"></span> <?php   echo "Product ID: ".$Product_Id ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $Product_Image ?> " alt="">
                <hr>
                <h3>
                <p><?php  echo "Product Description: ".$Product_Description ?></p>
                </h3>
                <hr>
            <?php } ?>

          <div class="row items-grid">  
         
          <!--<div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <div class="product-label">
                    <span class="sale">sale</span>
                  </div>
                  
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    
                  </div>-->
                </div>
              </div>
            </div>

            <!--<div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="img/shop/shop_item_2.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Accessories</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Mesh Sandal</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$190.00</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="img/shop/shop_item_3.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Women</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Tribal Grey Blazer</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$330.00</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="img/shop/shop_item_4.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Men</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Sweater w/ Colar</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$299.00</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="img/shop/shop_item_5.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Women</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Lola May Crop Blazer</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$42.00</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="img/shop/shop_item_6.jpg" alt="">
                  </a>
                  <div class="product-label">
                    <span class="sale">sale</span>
                  </div>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Men</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Faux Suits</a>
                      </h3>
                      <span class="price">
                        <del>
                          <span>$500.00</span>
                        </del>
                        <ins>
                          <span class="amount">$233.00</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="img/shop/shop_item_7.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Accessories</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Crew Watch</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$280.00</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="shop-single.html">
                    <img src="img/shop/shop_item_8.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="catalogue-grid.html">Women</a>
                      </span>
                      <h3 class="product-title">
                        <a href="shop-single.html">Jersey Stylish</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$289.00</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  end row -->
        </div>
      </section> <!-- end trendy products -->

      <!-- Testimonials -->
      <section class="section-wrap relative testimonials bg-parallax overlay" style="background-image:url(img/testimonials/testimonial_bg.jpg);">
        <div class="container relative">

          <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="heading white bottom-line">Happy Clients</h2>
            </div>
          </div>

          <div id="owl-testimonials" class="owl-carousel owl-theme text-center">

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">I’am amazed, I should say thank you so much for awsome Zenna company. Design is so good and neat, every detail has been taken care these team are realy amazing and talented! I will shop only with this website.</p>
                <span>Aman Prasad / Kellton Tech Employee</span>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">This is the excellent theme. It has many useful features that can be use for any kind of business. The support is just amazing and design</p>
                <span>Ayan Sharma / Art Director/ Kellton Tech Employee</span>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">Needless to say, beautifully designed website that serves many purpose. Even more cutomers support is the best! Highly recommend this site to anyone who enjoys a fine products. Boys have done well.</p>
                <span>Shubham Jain / Senior Developer</span>
              </div>
            </div>
          </div>
        </div>

      </section> <!-- end testimonials -->


      <!-- Product Widgets List
      <section class="section-wrap products-list">
        <div class="container">
          <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
              <h3 class="widget-title bottom-line full-grey">Special Offer</h3>
              <ul class="product-list-widget">
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_1.jpg" alt="">
                    <span class="product-title">Skinny Dress</span>
                  </a>
                  <span class="price">
                    <del>
                      <span>$388.00</span>
                    </del>
                    <ins>
                      <span class="amount">$159.99</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_2.jpg" alt="">
                    <span class="product-title">Mesh Brown Sandal</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$190.00</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_3.jpg" alt="">
                    <span class="product-title">Tribal Grey Blazer</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$330.00</span>
                    </ins>
                  </span>
                </li>               
              </ul>
            </div>  end special offer

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
              <h3 class="widget-title bottom-line full-grey">Bestsellers</h3>
              <ul class="product-list-widget">
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_9.jpg" alt="">
                    <span class="product-title">Camo Belt</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$33.00</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_10.jpg" alt="">
                    <span class="product-title">Heathered Scarf</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$180.00</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_11.jpg" alt="">
                    <span class="product-title">Mattle Brown Bag</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$150.00</span>
                    </ins>
                  </span>
                </li>               
              </ul>
          </div> <!-- end bestsellers 

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
              <h3 class="widget-title bottom-line full-grey">Accessories</h3>
              <ul class="product-list-widget">
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_5.jpg" alt="">
                    <span class="product-title">Lola May Crop Blazer</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$42.00</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_7.jpg" alt="">
                    <span class="product-title">Watch</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$280.00</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_8.jpg" alt="">
                    <span class="product-title">Jersey Stylish</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$289.00</span>
                    </ins>
                  </span>
                </li>               
              </ul>
            </div> <!-- end top rated 

            <div class="col-md-3 col-sm-6 col-xs-12 products-widget last">
              <h3 class="widget-title bottom-line full-grey">top rated</h3>
              <ul class="product-list-widget">
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_4.jpg" alt="">
                    <span class="product-title">Sweater w/ Colar</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$299.00</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_6.jpg" alt="">
                    <span class="product-title">Faux Suits</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$233.00</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="shop-single-product.html">
                    <img src="img/shop/shop_item_12.jpg" alt="">
                    <span class="product-title">Sport T-Shirt</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">$230.00</span>
                    </ins>
                  </span>
                </li>               
              </ul>
            </div> <!-- end sales -->

          </div> <!-- end row -->
        </div>
      </section> <!-- end product widgets -->


      <!-- Newsletter -->
      <section class="newsletter" id="subscribe">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h4>Get the latest updates</h4>
              <form class="relative newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Enter your email">
                <input type="submit" class="btn btn-lg btn-dark newsletter-submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>       
      </section>

      <?php include "footer.php" ;?>
