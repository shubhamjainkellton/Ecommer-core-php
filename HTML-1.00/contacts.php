

<?php include "header.php" ;?>

    <!-- Page Title -->
    <section class="page-title text-center bg-img overlay" style="background-image: url(img/page_title/contact_title_bg.jpg)">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">Contact</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="index.html">Zenna Info</a>
              </li>
              <li class="active">
                Contact
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <div class="content-wrapper oh">

      <!-- Contact -->
      <section class="section-wrap contact pb-40">
        <div class="container">
          <div class="row">

            <div class="col-md-8 mb-40">
              <form id="contact-form" action="#">

                <div class="contact-name">
                  <input name="name" id="name" type="text" placeholder="Name*">
                </div>
                <div class="contact-email">
                  <input name="mail" id="mail" type="email" placeholder="E-mail*">
                </div>
                <div class="contact-subject">
                  <input name="subject" id="subject" type="text" placeholder="Subject">
                </div>                

                <textarea name="comment" id="comment" placeholder="Message" rows="9"></textarea>
                <input type="submit" class="btn btn-lg btn-dark btn-submit" value="Send message" id="submit-message">
                <div id="msg" class="message"></div>
              </form>
            </div> <!-- end col -->

            <div class="col-md-3 col-md-offset-1 col-sm-5 mb-40">
              <div class="contact-item">
                <h6>Address</h6>
                <address>Zenna inc.<br>
                Lucknow, UP<br>
                India<br>
                PH 8840709475</address>
              </div> <!-- end address -->

              <div class="contact-item">
                <h6>Information</h6>
                <ul>
                  <li>
                    <i class="fa fa-envelope"></i><a hrref="mailto:zenna@support.com">zenna@support.com</a>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i><span>+1 (800) 884 070 94 75</span>
                  </li>
                  <li>
                    <i class="fa fa-print"></i><span>+1 (800) 888 026 52 64</span>
                  </li>
                </ul>               
              </div> <!-- end information -->

              <div class="contact-item">
                <h6>Business hours</h6>
                <ul>
                  <li>Monday – Friday: 9am to 9 pm</li>
                  <li>Saturday: 9am to 10 pm</li>
                  <li>Sunday: day off</li>
                </ul>               
              </div> <!-- end business hours -->
            </div>

          </div>
        </div>
      </section> <!-- end contact -->

      <!-- Google Map -->
      <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>


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

      <?php include "footer.php"?>