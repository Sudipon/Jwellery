<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gold Shop-Product Details</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: tan;">
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" style="width: 200px;height: 100px;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="indexo.php">Home</a></li>
              <li class="nav-item active submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
                </ul>
							</li>
             
						
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">
                  <?php
                      session_start();
                      if(!(isset($_SESSION['name'])))
                      {
                        echo('Accounts & list');
                        ?>
                        <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>  
                </ul>
                      <?php
                      }
                      else{
                        echo($_SESSION['name']);
                        ?>
                        <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php">LOG OUT</a></li>
                </ul>
                      <?php
                      }
                      
                    ?>                    
                </a>
              </li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->
	
	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="blog">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Profile</h1>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->


  <!--================Single Product Area =================-->
    <div class="col-md-6>
			<div class="row s_product_inner">
					<div class="s_product_text" style="text-align: center;">
						<h1 style="font-family: all;"><?php
                      $path=mysqli_connect('localhost','root','','sudipon');
                      	if(!(isset($_SESSION['name']))){
                      		echo('Try again!');
                      	}
                      	else{
                      		echo($_SESSION['name']);
                          echo "<br>";
                          echo "<br>";
                      	}
                      	?></h1>
            
						<h2 style="font-family: all;">
              <?php

                $fetch="SELECT * FROM gold WHERE username='$_SESSION[name]'";
                $res=($path->query($fetch));
                $rows=mysqli_fetch_assoc($res);

                echo "Password:     ";
                echo ($rows['password']);
                echo "<br>";
                echo "<br>";
                echo "Mobile Number:     ";
                echo ($rows['mobile']);
                echo "<br>";
                echo "<br>";
                echo "Email address:               ";
                echo ($rows['email']);
                echo "<br>";
                echo "<br>";
                echo "Profile photo:      ";
                echo ($rows['image']);
                
              
              ?>

            </h2>

        
						<div class="product_count">
							<a class="button primary-btn" href="update.php">Update</a>               
						</div>
					</div>
			</div>
    </div>

	<!--================End Single Product Area =================-->

	<!--================ Start related Product area =================-->  
	<section class="related-product-area section-margin--small mt-0">
		<div class="container">
			<div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Top <span class="section-intro__style">Product</span></h2>
      </div>
			<div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-1.jpg" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Diamond shop</a>
                  <div class="price">Rs.1000.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-2.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Diamond shop</a>
                <div class="price">Rs.1000.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-3.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Diamond shop</a>
                <div class="price">Rs.1000.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-4.jpg" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Diamond shop</a>
                  <div class="price">Rs.1000.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-5.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Diamond shop</a>
                <div class="price">Rs.1000.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-6.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Diamond shop</a>
                <div class="price">Rs.1000.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-7.jpg" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Diamond shop</a>
                  <div class="price">Rs.1000.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-8.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Diamond shop</a>
                <div class="price">Rs.1000.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-9.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Diamond shop</a>
                <div class="price">Rs.1000.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-10.jpg" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Diamond shop</a>
                  <div class="price">Rs.1000.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-11.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Diamond shop</a>
                <div class="price">Rs.1000.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-12.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Diamond shop</a>
                <div class="price">Rs.1000.00</div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</section>
	<!--================ end related Product area =================-->  	

  <!--================ Start footer Area  =================-->	
	<footer class="footer">
    <div class="footer-area">
      <div class="container">
        <div class="row section_gap">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title large_title">Our Mission</h4>
              <p>
                So seed seed green that winged cattle in. Gathering thing made fly you're no 
                divided deep moved us lan Gathering thing us land years living.
              </p>
              <p>
                So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
              </p>
            </div>
          </div>
          <div class="offset-lg-2 col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Quick Links</h4>
              <ul class="list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                
                <li><a href="#">Product</a></li>
                <li><a href="#">Brand</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Contact Us</h4>
              <div class="ml-40">
                <p class="sm-head">
                  <span class="fa fa-location-arrow"></span>
                  Head Office
                </p>
                <p>332,J.N.Bose Road</p>
  
                <p class="sm-head">
                  <span class="fa fa-phone"></span>
                  Phone Number
                </p>
                <p>
                  9007969453<br>
                  8777058841
                </p>
  
                <p class="sm-head">
                  <span class="fa fa-envelope"></span>
                  Email
                </p>
                <p>
                  gsudipon@gmail.com
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </footer>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>