<?php 
  session_start();
  if(isset($_SESSION['login-status'])!= 1) {
         echo ("Please login");
         header("location: login.php");
  }


  include("ConnectToAWS.php");
  $userid=$_SESSION['user_id'];

$sql2="SELECT balance FROM user where id='$userid'"; 
$balance = mysqli_query($db,$sql2)->fetch_object()->balance;
  $error = "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $poster_id = $_SESSION['user_id'];
      $title = $_POST['title'];
      $description = $_POST['description']; 
      $category_id = $_POST['category'];
      $type = $_POST['job-type']; 
      $city_id = $_POST['location'];

      

      //$jobcategory = "1";
    //  $jobtype="b";
      //$location = "New York";
      $comments = $_POST['comments']; 
      $wage = $_POST['credits'];


       $sql = "INSERT INTO job (poster_id, title, description, category_id, type, city_id, comments, wage) VALUES ('".$poster_id."', '".$title."', '".$description."', '".$category_id."', '".$type."', '".$city_id."', '".$comments."', '".$wage."')";
      $result = mysqli_query($db,$sql);
      //if the above command doesnt work try the one below 
      //$sql = "INSERT INTO job1 (jobtitle, jobdescription, jobcategory, jobtype, location, comments, credits) VALUES ('$jobtitle', '$jobdescription', '$jobcategory', '$jobtype', '$location', '$comments', '$credits')";
      if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
      }
      else{
        header("location: posting-success.php");
      }
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      
   }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Post Job | WeWork</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
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
                          <li class="active"><a href="a href="account-settings.php">Profile</a></li>
                            <li><a href="account-mypostedjobs.php">Posted Jobs</a></li>
                            <li><a href="account-myacceptedjobs.php">Accepted Jobs</a></li>
                            <li><a href="#">Messages</a></li>
                          </ul>
                    <div class="collapse navbar-collapse" id="navbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="payment.php"><i class="fa fa-credit-card"></i> Balance: <?php echo $balance;?></a></li>
                        <li><a href="signup.php"><i class="lnr lnr-user"></i>Logout</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
    </div>
    <!-- Header Section End -->
    <!-- Enter your code here -->
    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Post your Job</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Content section Start -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
            <div class="page-login-form box">
              <h2><center>
                Post your Job
              </center></h2>
              <form role="form" class="login-form" action="" method="POST">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-briefcase"></i>
                    <input type="text" id="title" class="form-control" name="title" placeholder="Job Title*">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-align-justify"></i>
                    <input type="text" id="description" class="form-control" name="description" placeholder="Job description*">
                  </div>
                </div>
                <div class="form-group">
                    <select id="category" name="category" class="form-control">
                      <option value="jobcategory">Job Category</option>
                      <option value="1"> Accounting/Finance </option>
                      <option value="2"> Education/Training </option>
                      <option value="3"> Engineer/Architects </option>
                      <option value="4"> Garments/Textile </option>
                      <option value="5"> HR/Org. Development </option>
                      <option value="6"> Design/Creative </option>
                      <option value="7"> Research/Consultancy </option>
                      <option value="8"> Medical/Pharma </option>
                      <option value="9"> Music/Arts </option>
                      <option value="10">  Marketing/Sales </option>
                      <option value="11">  Production/Operation </option>
                      <option value="12">  Miscellaneous </option>
                    </select>
                  </div>
                <div class="form-group">
                    <select name="job-type" id="job-type" class="form-control">
                      <option value="jobtype">Job Type</option>
                      <option value="part-time">Part-Time</option>
                      <option value="full-time">Full-Time</option>
                      <option value="student">Student</option>
                    </select>
                  </div>
                        <div class="form-group">
                            <select  name="location" id="location" class="form-control" >
                              <option value="1">Albany NY</option>
                              <option value="2"> ALLEGANY  NY</option>
                              <option value="3"> BROOME  NY </option>
                              <option value="4"> CATTARAUGUS NY </option>
                              <option value="5"> CAYUGA  NY </option>
                              <option value="6"> CHAUTAUQUA  NY</option>
                              <option value="7"> CHEMUNG NY</option>
                              <option value="8"> CHENANGO  NY</option>
                              <option value="9"> CLINTON NY</option>
                              <option value="10">  COLUMBIA  NY</option>
                              <option value="11">  CORTLAND  NY</option>
                              <option value="12">  DELAWARE  NY</option>
                              <option value="13">  DUTCHES NY</option>
                              <option value="14">  ERIE  NY</option>
                              <option value="15"> ESSEX NY</option>
                              <option value="16">  FRANKLIN  NY</option>
                              <option value="17">  FULTON  NY</option>
                              <option value="18">  GENESEE NY</option>
                              <option value="19">  GREENE  NY</option>
                              <option value="20">  HAMILTON  NY</option>
                              <option value="21">  HERKIMER  NY</option>
                              <option value="22">  JEFFERSON NY</option>
                              <option value="23">  LEWIS NY</option>
                              <option value="24">  LIVINGSTON  NY</option>
                              <option value="25">  MADISON NY</option>
                              <option value="26">  MONROE  NY</option>
                              <option value="27">  MONTGOMERY  NY</option>
                              <option value="28">  NASSAU  NY</option>
                              <option value="29">  NIAGARA NY</option>
                              <option value="30">  ONEIDA  NY</option>
                              <option value="31">  ONONDAGA  NY</option>
                              <option value="32">  ONTARIO NY</option>
                              <option value="33">  ORANGE  NY</option>
                              <option value="34">  ORLEANS NY</option>
                              <option value="35">  OSWEGO  NY</option>
                              <option value="36">  OTSEGO  NY</option>
                              <option value="37">  PUTNAM  NY</option>
                              <option value="38">  PENSSELAER  NY</option>
                              <option value="39">  ROCKLAND  NY</option>
                              <option value="40">  ST. LAWRENCE  NY</option>
                              <option value="41">  SARATOGA  NY</option>
                              <option value="42">  SCHENECTADY NY</option>
                              <option value="43">  SCHOHARIE NY</option>
                              <option value="44">  SCHUYLER  NY</option>
                              <option value="45">  SENECA  NY</option>
                              <option value="46">  STEUBEN NY</option>
                              <option value="47">  SUFFOLK NY</option>
                              <option value="48">  SULLIVAN  NY</option>
                              <option value="49">  TIOGA NY</option>
                              <option value="50">  TOMPKINS  NY</option>
                              <option value="51">  ULSTER  NY</option>
                              <option value="52">  WARREN  NY</option>
                              <option value="53">  WASHINGTON  NY</option>
                              <option value="54">  WAYNE NY</option>
                              <option value="55">  WESTCHESTER NY</option>
                              <option value="56">  WYOMING NY</option>
                              <option value="57">  YATES NY</option>
                              <option value="58">  NEW YORK CITY NY </option>
                              <option value="59">  Syracuse  NY</option>
                              <option value="60">  Washington  DC</option>
                            </select>
                        </div>
                    
                      <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-comment-o"></i>
                    <input type="text" id="comments" class="form-control" name="comments" placeholder="Comments">
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-dollar"></i>
                    <input type="text" id="credits" class="form-control" name="credits" placeholder="Job Credit*">
                  </div>
                </div>
                  </div>
                  <br>
                <button class="btn btn-common log-btn">Submit</button>
              </form>
            </div>
          
        <!-- Rules part -->
          <div class="col-md-4">
            <div class="page-login-form box">
              <h3>
                Quick Rules
              </h3>
              <br>
              <h4> Posting an ad on wework.com is free!</h4>
              <h4>However, all ads must follow our rules: </h4><br>
              <h5>
                <p> > Make sure you post in the correct category.</p>
                <p> > Do not post the same ad more than once or repost an ad within 48 hours</p>
                <p> > Do not pictures without watermarks </p>
                <p> > Do not post ads containing multiple items unless its a package deal </p>
                <p> > Do not put your email or phone numbers in the title or description </p>
                <p> > Do not post the ad more than once or repost an ad within 48 hours.</p>
                <p> > Make sure the job is posted within the legal terms</p>
                <p> > Assign credits inaccordance to job difficulty </p>
              </h5>
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
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="tnc.php">Terms of Use</a></li>
                  <li><a href="privacy.php">Privacy Policy</a></li>
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
