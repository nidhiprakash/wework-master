<?php
session_start();
  if(isset($_SESSION['login-status']) == 1) {
         header("location: account-home.php");
  }

  include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>WeWork</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <!-- Start WOWSlider.com HEAD section -->
      <link rel="stylesheet" type="text/css" href="engine1/style.css" />
      <script type="text/javascript" src="engine1/jquery.js"></script>
      <!-- End WOWSlider.com HEAD section -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
      <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
      <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
      <link rel="stylesheet" href="assets/css/main.css" type="text/css">
      <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
      <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
      <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
      <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
      <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
      <link rel="apple-touch-icon" sizes="57x57" href="assets/fav/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="assets/fav/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="assets/fav/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="assets/fav/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="assets/fav/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="assets/fav/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="assets/fav/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="assets/fav/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="assets/fav/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="assets/fav/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="assets/fav/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="assets/fav/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/fav/favicon-16x16.png">
      <link rel="manifest" href="assets/fav/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="assets/fav/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">

  </head>

  <body>
    <!-- Header Section Start -->
    <div class="header">
                <nav class="navbar navbar-default main-navigation" role="navigation">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="index.php"><img src="assets/img/w_logo.png" width="60px" height="60px" alt=""></a>
                    </div>

                          <ul class="nav navbar-nav top-nav-text" style="font-family: 'Ubuntu',sans-serif; text-transform: uppercase; font-weight: 500; font-size: 40px;">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li> 
                            <li><a href="howitworks.php">How It Works</a></li> 
                            <li><a href="#">Contact</a></li> 
                          </ul>
                    <div class="collapse navbar-collapse" id="navbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php"><i class="lnr lnr-enter"></i> Login</a></li>
                        <li><a href="signup.php"><i class="lnr lnr-user"></i> Signup</a></li>
                        <li class="postadd">
                          <a class="btn-yellow btn btn-common btn-text" href="post-job.php"><span class="fa fa-plus-circle"></span> Post an Ad</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
    </div>
    <!-- Header Section End -->
    <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
    <li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_0"/></li>
    <li><img src="data1/images/1.jpg" alt="slideshow javascript" title="1" id="wows1_1"/></li>
    <li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_2"/></li>
  </ul></div>
  
</div>
</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
    <!--<div class=" splash-image">
      <img src="assets/img/bg-home.jpg">
      <h1 class="home-bg text-center" style="margin-left:-400px; margin-top: -550px; color: white; font-family: Poppins, sans-serif; font-size: 70px;"><b>
        Welcome to WeWork!</b>
      </h1>
      <p>
        We start with what you want to achieve with your life. Then we draft a business plan of your financial future that align with your core values, your specific aims and your deepest desires. We help you achieve growth, while providing thorough advice that you can trust.
      </p>
    </div>-->

    <!-- Start intro section -->
    <section id="intro" class="section-intro">
          <div class="overlay">
            <div class="container">
              <div class="main-text">
                <!--<h1 class="intro-title">Welcome To WeWork</h1>-->
                <h1 class="intro-title" style="margin-bottom: 45px;">Post jobs, get jobs. It's that easy!</h1>

                <!-- Start Search box -->
                <div class="row search-bar">
                  <div class="advanced-search">
                    <form class="search-form" method="get">
                      <div class="col-md-6 col-sm-6 search-col">
                        <input class="form-control keyword" name="keyword" value="" placeholder="Enter Keyword" type="text">
                        <i class="fa fa-search"></i>
                      </div>
                      <div class="col-md-3 col-sm-6 search-col">
                        <div class="input-group-addon search-category-container">
                          <label class="styled-select location-select">
                            <select class="dropdown-product selectpicker" name="product-cat" >
                              <option value="0">All Locations</option>
                              <option value="New York">New York</option>
                              <option value="California">California</option>
                              <option value="Washington">Washington</option>
                              <option value="churches">Birmingham</option>
                              <option value="Birmingham">Chicago</option>
                              <option value="Phoenix">Phoenix</option>
                            </select>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 search-col">
                        <button class="btn btn-common btn-search btn-block"><strong class="btn-text">Search</strong></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Search box -->
              </div>
            </div>
          </div>
    </section>
    <!-- end intro section -->
    



    <div class="wrapper bg-grey">
      <!-- Categories Homepage Section Start -->
      <section id="categories-homepage">
        <div class="container">
           <div class="section category-items job-category-items  text-center">
        <ul class="category-list">  
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/1.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Accounting/Finance</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/2.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Education/Training</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/3.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Engineer/Architects</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/4.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Garments/Textile</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/5.png" alt="img" class="img-responsive"></div>
              <span class="category-title">HR/Org. Development</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/6.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Design/Creative</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/7.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Research/Consultancy</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/8.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Medical/Pharma</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/9.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Music &amp; Arts</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/10.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Marketing/Sales</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/11.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Production/Operation</span>
            </a>
          </li><!-- category-item -->
          
          <li class="category-item">
            <a href="job-list.html">
              <div class="category-icon icon-center"><img src="assets/img/icon/12.png" alt="img" class="img-responsive"></div>
              <span class="category-title">Miscellaneous</span>
            </a>
          </li><!-- category-item -->         
        </ul>       
        </div>
        </div>
      </section>

      
      <!-- Dummy container starts-->
      <div class="container"> 
        <div class="section cta cta-two text-center">
        <div class="row">
          <div class="col-sm-4">
            <div class="single-cta">
              <div class="cta-icon icon-jobs">
                <img src="assets/img/icon/31.png" alt="Icon" class="img-responsive bottom-image">
              </div><!-- cta-icon -->
              <h3>3,412</h3>
              <h4>Live Jobs</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
          </div><!-- single-cta -->

          <div class="col-sm-4">
            <div class="single-cta">
              <!-- cta-icon -->
              <div class="cta-icon icon-company">
                <img src="assets/img/icon/32.png" alt="Icon" class="img-responsive bottom-image">
              </div><!-- cta-icon -->
              <h3>12,043</h3>
              <h4>Total Company</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
          </div><!-- single-cta -->

          <div class="col-sm-4">
            <div class="single-cta">
              <div class="cta-icon icon-candidate">
                <img src="assets/img/icon/33.png" alt="Icon" class="img-responsive bottom-image">
              </div><!-- cta-icon -->
              <h3>5,798,298</h3>
              <h4>Total Candidate</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
          </div><!-- single-cta -->
        </div><!-- row -->
      </div>
    </div>
    </div>
    <!-- Dummy section ends -->


    <!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->
    	<section class="footer-Content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0">
              <div class="widget">
                <h3 class="block-title">About us</h3>
                <div class="textwidget">
                  <img src="assets/img/logo.png" width="40px" height="40px">
                  <p>WeWork is a new Job Portal platform that helps you find work from!</p>
                </div>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5">
    					<div class="widget">
    						<h3 class="block-title">Quik Links</h3>
  							<ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
    					</div>
    				</div>
            <div>
              <div class="footer-widget social-widget">
              <h3 class="block-title">Follow us on</h3>
              <ul>
                <li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                <li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
              </ul>
            </div>
            </div>

    			</div>
    		</div>
    	</section>
    	<!-- Footer area End -->

    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info pull-left">
                <p>Designed by WeWork.com</p>
              </div>

    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>


  </body>
</html>
