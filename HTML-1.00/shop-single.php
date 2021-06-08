<?php
//session.
session_start();

//if loggedin session is not set or logged is not true.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
  header("location: login.php");
  exit;

}
?>


<?php include "header.php" ;?>

    <div class="content-wrapper oh">

      <!-- Single Product -->
      <?php 
            
            if(isset($_GET['s_no'])){
              $the_category_id = $_GET['s_no'];
          }
          
          
          $query = " SELECT * FROM product WHERE s_no= $the_category_id ";
          $select_category_by_id = mysqli_query($connection,$query);;

            while($row = mysqli_fetch_assoc($select_category_by_id)) {
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
      <section class="section-wrap pb-40 single-product">
        <div class="container-fluid semi-fluid">
          <div class="row">

            <div class="col-md-6 col-xs-12 product-slider mb-60">

              <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

                <div class="gallery-cell">
                  
                <img class="img-responsive" src="../admin/images/<?php echo $Product_Image ?> " alt="">
                    
                  </a>
                </div>
                
                
              </div> <!-- end gallery main -->

              <!-- <div class="gallery-thumbs">
                <div class="gallery-cell">
                  <img src="img/shop/item_thumb_1.jpg" alt="" />
                </div>
                <div class="gallery-cell">
                  <img src="img/shop/item_thumb_2.jpg" alt="" />
                </div>
                <div class="gallery-cell">
                  <img src="img/shop/item_thumb_3.jpg" alt="" />
                </div>
                <div class="gallery-cell">
                  <img src="img/shop/item_thumb_4.jpg" alt="" />
                </div>
                <div class="gallery-cell">
                  <img src="img/shop/item_thumb_5.jpg" alt="" />
                </div>
              </div>  end gallery thumbs -->

            </div> <!-- end col img slider -->

            
                
              <h1 class="product-title"><?php  echo $Product_Name ?></h1> 
              <span class="s_no">
                <a href="#"><?php   echo "s_no: ".$s_no ?></a><br>
              </span> 
              <span class="Product ID">
                <a href="#"><?php   echo "Product ID: ".$Product_Id ?></a><br>
              </span>             
              <span class="price">
              <del>
              <span><?php  echo "Actual Price: ". $Actual_Price ?></span><br>
              </del>
              <ins>
              <span class="amount"><?php  echo "Offered Price: ".$Offer_Price ?></span>
                </ins>
              </span></br>
              <span class="rating">
                <a hrref="#"></br><h6><?php  echo "Product Specifications: ".$Specification ?></a>
              </span></br>
              <span class="Resturable">
                <a hrref="#"></br><?php  echo "Returnable: ". $is_it_returnable ?></a>
              </span></br></br>
              <span class="Description"><h6><?php  echo "Description : ".$Product_Description ?>
              

              <div class="color-swatches clearfix">
                <span>Color:</span>
                <a hrref="#" class="swatch-violet"></a>
                <a hrref="#" class="swatch-black"></a>
                <a hrref="#" class="swatch-cream"></a>
              </div>

              <div class="size-options clearfix">
                <span>Size:</span>
                <a hrref="#" class="size-xs selected">XS</a>
                <a hrref="#" class="size-s">S</a>
                <a hrref="#" class="size-m">M</a>
                <a hrref="#" class="size-l">L</a>
                <a hrref="#" class="size-xl">XL</a>
              </div>

              <div class="product-actions">
                <span>Qty:</span>

                <div class="quantity buttons_added">                  
                  <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text" />
                  <div class="quantity-adjust">
                    <a hrref="#" class="plus">
                      <i class="fa fa-angle-up"></i>
                    </a>
                    <a hrref="#" class="minus">
                      <i class="fa fa-angle-down"></i>
                    </a>
                  </div>
                </div>

                <a href="add_to_cart.php?s_no=<?php echo $s_no?>" class="btn btn-dark btn-lg add-to-cart"><span>Add to Cart</span></a>

                <a hrref="#" class="product-add-to-wishlist"><i class="fa fa-heart"></i></a>                          
              </div>

              <!-- Accordion 
              <div class="panel-group accordion mb-50" id="accordion">
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="minus">Description<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                    <?php  //echo $Product_Description ?>
                    </div>
                  </div>
                </div>-->

               <!-- <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="plus">Information<span>&nbsp;</span>
                    </a>
                  </div>-->
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table shop_attributes">
                        <tbody>
                          <tr>
                            <th>Size:</th>
                            <td>EU 41 (US 8), EU 42 (US 9), EU 43 (US 10), EU 45 (US 12)</td>
                          </tr>
                          <tr>
                            <th>Colors:</th>
                            <td>Violet, Black, Blue</td>
                          </tr>
                          <tr>
                            <th>Fabric:</th>
                            <td>Cotton (100%)</td>
                          </tr>                                     
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <?php } ?>

                
                        </ul>         
                      </div> <!--  end reviews -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="socials-share clearfix">
                <span>Share:</span>
                <div class="social-icons nobase">
                  <a hrref="#"><i class="fa fa-twitter"></i></a>
                  <a hrref="#"><i class="fa fa-facebook"></i></a>
                  <a hrref="#"><i class="fa fa-google"></i></a>
                  <a hrref="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div> <!-- end col product description -->
          </div> <!-- end row -->
         
        </div> <!-- end container -->
      </section> <!-- end single product -->


      <!-- Related Products
      <section class="section-wrap pt-0 shop-items-slider">
        <div class="container">
          <div class="row heading-row">
            <div class="col-md-12 text-center">
              <h2 class="heading bottom-line">
                Related Products
              </h2>
            </div>
          </div>

          <div class="row">

            <div id="owl-related-items" class="owl-carousel owl-theme">
              <div class="product">
                <div class="product-item hover-trigger">
                  <div class="product-img">
                    <a href="shop-single.html">
                      <img src="img/shop/shop_item_3.jpg" alt="">
                      <img src="img/shop/shop_item_back_3.jpg" alt="" class="back-img">
                    </a>
                    <div class="product-label">
                      <span class="sale">sale</span>
                    </div>
                    <div class="hover-2">                    
                      <div class="product-actions">
                        <a href="#" class="product-add-to-wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </div>                        
                    </div>
                    <a href="#" class="product-quickview">Quick View</a>
                  </div>
                  <div class="product-details">                      
                    <h3 class="product-title">
                      <a href="shop-single.html">Tribal Grey Blazer</a>
                    </h3>
                    <span class="category">
                      <a href="catalogue-grid.html">Women</a>
                    </span>
                  </div>
                  <span class="price">
                    <del>
                      <span>$730.00</span>
                    </del>
                    <ins>
                      <span class="amount">$399.99</span>
                    </ins>
                  </span>
                </div>
              </div>

              <div class="product">
                <div class="product-item hover-trigger">
                  <div class="product-img">
                    <a href="shop-single.html">
                      <img src="img/shop/shop_item_11.jpg" alt="">
                      <img src="img/shop/shop_item_back_11.jpg" alt="" class="back-img">
                    </a>
                    <div class="hover-2">                    
                      <div class="product-actions">
                        <a href="#" class="product-add-to-wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </div>                        
                    </div>
                    <a href="#" class="product-quickview">Quick View</a>
                  </div>
                  <div class="product-details">                      
                    <h3 class="product-title">
                      <a href="shop-single.html">Mantle Brown Bag</a>
                    </h3>
                    <span class="category">
                      <a href="catalogue-grid.html">Accessories</a>
                    </span>
                  </div>
                  <span class="price">
                    <ins>
                      <span class="amount">$150.00</span>
                    </ins>
                  </span>
                </div>
              </div>

              <div class="product">
                <div class="product-item hover-trigger">
                  <div class="product-img">
                    <a href="shop-single.html">
                      <img src="img/shop/shop_item_6.jpg" alt="">
                      <img src="img/shop/shop_item_back_6.jpg" alt="" class="back-img">
                    </a>
                    <div class="hover-2">                    
                      <div class="product-actions">
                        <a href="#" class="product-add-to-wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </div>                        
                    </div>
                    <a href="#" class="product-quickview">Quick View</a>
                  </div>
                  <div class="product-details">                      
                    <h3 class="product-title">
                      <a href="shop-single.html">Faux Suits</a>
                    </h3>
                    <span class="category">
                      <a href="catalogue-grid.html">Men</a>
                    </span>
                  </div>
                  <span class="price">
                    <ins>
                      <span class="amount">$233.00</span>
                    </ins>
                  </span>
                </div>
              </div>

              <div class="product">
                <div class="product-item hover-trigger">
                  <div class="product-img">
                    <a href="shop-single.html">
                      <img src="img/shop/shop_item_4.jpg" alt="">
                      <img src="img/shop/shop_item_back_4.jpg" alt="" class="back-img">
                    </a>
                    <div class="hover-2">                    
                      <div class="product-actions">
                        <a href="#" class="product-add-to-wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </div>                        
                    </div>
                    <a href="#" class="product-quickview">Quick View</a>
                  </div>
                  <div class="product-details">                      
                    <h3 class="product-title">
                      <a href="shop-single.html">Sweater w/ Colar</a>
                    </h3>
                    <span class="category">
                      <a href="catalogue-grid.html">Men</a>
                    </span>
                  </div>
                  <span class="price">
                    <ins>
                      <span class="amount">$299.00</span>
                    </ins>
                  </span>
                </div>
              </div>

              <div class="product">
                <div class="product-item hover-trigger">
                  <div class="product-img">
                    <a href="shop-single.html">
                      <img src="img/shop/shop_item_5.jpg" alt="">
                      <img src="img/shop/shop_item_back_5.jpg" alt="" class="back-img">
                    </a>
                    <div class="hover-2">                    
                      <div class="product-actions">
                        <a href="#" class="product-add-to-wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </div>                        
                    </div>
                    <a href="#" class="product-quickview">Quick View</a>
                  </div>
                  <div class="product-details">                      
                    <h3 class="product-title">
                      <a href="shop-single.html">Lola May Crop Blazer</a>
                    </h3>
                    <span class="category">
                      <a href="catalogue-grid.html">Women</a>
                    </span>
                  </div>
                  <span class="price">
                    <ins>
                      <span class="amount">$42.00</span>
                    </ins>
                  </span>
                </div>
              </div>

              <div class="product">
                <div class="product-item hover-trigger">
                  <div class="product-img">
                    <a href="shop-single.html">
                      <img src="img/shop/shop_item_6.jpg" alt="">
                      <img src="img/shop/shop_item_back_6.jpg" alt="" class="back-img">
                    </a>
                    <div class="product-label">
                      <span class="sale">sale</span>
                    </div>
                    <div class="hover-2">                    
                      <div class="product-actions">
                        <a href="#" class="product-add-to-wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </div>                        
                    </div>
                    <a href="#" class="product-quickview">Quick View</a>
                  </div>
                  <div class="product-details">                      
                    <h3 class="product-title">
                      <a href="shop-single.html">Faux Suits</a>
                    </h3>
                    <span class="category">
                      <a href="catalogue-grid.html">Men</a>
                    </span>
                  </div>
                  <span class="price">
                    <del>
                      <span>$500.00</span>
                    </del>
                    <ins>
                      <span class="amount">$233.00</span>
                    </ins>
                  </span>
                </div>
              </div>

            </div> end slider

          </div>
        </div>
      </section> end related products -->



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

      <!-- Footer Type-1 -->
<?php include "footer.php"?>