 
<?php
  include("config.php");
  session_start();
  
  
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $dob = $_POST['dob']; 
      $nationality = $_POST['nationality'];
      $gender = $_POST['gender'];
      $address1 = $_POST['address1'];
      $address2 = $_POST['address2'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $skills = $_POST['skills'];
      $language = $_POST['language'];
      $sql = "INSERT INTO userdetail (firstname, lastname, dob, nationality, gender, address1, address2, city, state, zip, skills, language) VALUES ('$firstname', '$lastname', '$dob', '$nationality', '$gender', '$address1', '$address2', '$city', '$state', '$zip', '$skills', '$language')";
      $result = mysqli_query($db,$sql);
      $sql2="SELECT max(userdetailid) as last from userdetail"; 
      $user_detail_id = mysqli_query($db,$sql2)->fetch_object()->last;
      $userid=$_SESSION['user_id'];
      $sql3="UPDATE user SET userdetailid = '$user_detail_id' WHERE userid = '$userid';";
      $result3=mysqli_query($db,$sql3);
      $userid=$_SESSION['user_id'];
        $sql="SELECT * FROM user where userid='$userid'"; 
        $user_detail_id = mysqli_query($db,$sql)->fetch_object()->userdetailid;
        $sql2="SELECT * from userdetail where userdetailid ='$user_detail_id'";
        $fname=mysqli_query($db,$sql2)->fetch_object()->firstname;
        $lname=mysqli_query($db,$sql2)->fetch_object()->lastname;
        $_SESSION['fname']=$fname;
        $_SESSION['lname']=$lname;
      header("location: account-home.php");
   }
?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Profile | WeWork</title>

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
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


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
                          
                    <!-- <div class="collapse navbar-collapse" id="navbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php"><i class="lnr lnr-enter"></i> Login</a></li>
                        <li><a href="signup.php"><i class="lnr lnr-user"></i> Signup</a></li>
                        <li class="postadd">
                          <a class="btn btn-common btn-text" href="post-job.php"><span class="fa fa-plus-circle"></span> Post an Ad</a>
                        </li>
                      </ul>
                    </div> -->
                  </div>
                </nav>
    </div>
    <!-- Header Section End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Profile</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Content section Start -->
    <section id="content">
      <div class="container">
      <h1 class="text-center" style="margin-top: 20px; margin-bottom: 45px;">Hello Please Enter Your Information</h1>

        <div class="row" >
          <div class="col-md-6 col-md-6"></div>
       
            <div class="page-login-form box">
              
              <form role="form" class="login-form" action="" method="POST">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-briefcase"></i>
                    <input type="text" id="firstname" class="form-control" name="firstname" placeholder="First Name*" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-briefcase"></i>
                    <input type="text" id="lastname" class="form-control" name="lastname" placeholder="Last Name*" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="fa fa-birthday-cake"></i>
                    <input type="Date" id="dob" class="form-control" name="dob" placeholder="Date of Birth*" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="fa fa-compass"></i>
                    <input type="text" id="nationality" class="form-control" name="nationality" placeholder="Nationality*" required="required">
                  </div>
              </div>
              <div class="form-group">
                    <div class="input-icon">
                      <select name="gender" class="form-control">
                        <option value="0">Gender</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
              </div>
            
              
                
                  <div class="form-group">
                 
                    <div class="input-icon">
                    <i class="fa fa-map-signs"></i>
                    <input type="text" id="stradd" class="form-control" name="address1" placeholder="Street Address Line 1*" required="required">
                 
                </div>
              </div>
                <div class="form-group">
              
                    <div class="input-icon">
                    <i class="fa fa-map-marker"></i>
                    <input type="text" id="appnum" class="form-control" name="address2" placeholder="Street Address Line 2" >
                
                </div>
              </div>
                <div class="form-group">
                  
                    <div class="input-icon">
                    <i class="fa fa-map-marker"></i>
                    <input type="text" id="city" class="form-control" name="city" placeholder="City*"
                    required="required">
                
                </div>
              </div>
                <div class="form-group">
                 
                    <div class="input-icon">
                    <i class="fa fa-map-marker"></i>
                    <input type="text" id="state" class="form-control" name="state" placeholder="State*" required="required">
                  
                </div>
              </div>
                <div class="form-group">
                  
                    <div class="input-icon">
                      <i class="fa fa-map-pin"></i>
                      <input type="text" id="zip" class="form-control" name="zip" placeholder="Zipcode*" required="required">
                  
                     </div>
                </div>
                <div class="form-group">
                  
                    <div class="input-icon">
                      <i class="fas fa-industry"></i>
                      <input type="text" id="skill" class="form-control" name="skills" placeholder="Skills">
                     </div>
                </div>
                <div class="form-group">
                  
                    <div class="input-icon">
                      <i class="fas fa-language"></i>
                      <input type="text" id="lang" class="form-control" name="language" placeholder="Languages">
                     </div>
                </div>
                  <br>
                <button class="btn btn-common log-btn">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      </section>
     
   
     <!---helloooo herreeee -->

    <!-- Content section End -->

    <!-- Close your code here-->
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
