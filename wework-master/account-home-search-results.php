<?php 
session_start();
include("config.php");
$userid=$_SESSION['user_id'];
$sql="SELECT * FROM user where userid='$userid'"; 
$user_detail_id = mysqli_query($db,$sql)->fetch_object()->userdetailid;
$sql2="SELECT * from userdetail where userdetailid ='$user_detail_id'";
$fname=mysqli_query($db,$sql2)->fetch_object()->firstname;
$lname=mysqli_query($db,$sql2)->fetch_object()->lastname;
$address1=mysqli_query($db,$sql2)->fetch_object()->address1;
$address2=mysqli_query($db,$sql2)->fetch_object()->address2;


$keyword=$_GET['keyword']; //get this from form
$location=$_GET['location']; //get this from form   

$sql3 = "SELECT * FROM job WHERE jobtitle LIKE '%$keyword%' OR jobdescription LIKE '%$keyword%' OR jobtype LIKE '%$keyword%' OR jobcategory LIKE '%$keyword%' OR location LIKE '%$keyword%'";
$result3 = mysqli_query($db,$sql3);
if (!$result3) {
printf("Error: %s\n", mysqli_error($db));
echo "ERROR";
exit();
}

$i=0;

if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) {
        $postername[$i] = $row["postername"];
        $jobid[$i] = $row["jobid"];

        $jobtitle[$i] = $row["jobtitle"];
        $jobdescription[$i] = $row["jobdescription"];
        $jobtype[$i] = $row["jobtype"];
        $loc[$i] = $row["location"];
        $comments[$i] = $row["comments"];
        $credits[$i] = $row["credits"];
        $status[$i] = $row["status"];
        $jobcategory[$i] = $row["jobcategory"];
        $i=$i+1;
    }
} else {
    echo "0 results";
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Welcome | WeWork</title>
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
                            <li class="active"><a href="account-settings.php">Profile</a></li>
                            <li><a href="account-mypostedjobs.php">Posted Jobs</a></li>
                            <li><a href="account-myacceptedjobs.php">Applied Jobs</a></li>
                            <li><a href="#">Messages</a></li>
                          </ul>
                    <div class="collapse navbar-collapse" id="navbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="postadd">
                          <a class="btn btn-common btn-text" href="post-job.php"><span class="fa fa-plus-circle"></span> Post an Ad</a>
                        </li>
                        <li><a href="payment.php"><i class="fa fa-credit-card"></i> Payment Information</a></li>
                        <li><a href="logout.php"><i class="lnr lnr-user"></i> Logout</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </nav>
    </div>
    <!-- Header Section End -->
    <!-- Enter your code here -->
    <!-- Page Header Start -->
    
    <!-- Content section Start -->
  

      <?php 
    for ($count=0; $count < $i; $count++) {
      ?>
       <section class="job-details">
            <div class="container bg-grey" style="margin-top: 50px; height: 250px;">
              <div class="row">
                <div class="col-9">
                  <div class="row" style="margin-top: 10px; margin-left: 40px;">
                  <div class="header-content pull-left">
                             <h3 style="font-size: 32px; margin-top: 30px;"><a href="#"><?php echo $jobtitle[$count]; ?></a></h3>
                             <span><i class="fa fa-map-marker" style="font-size: 20px;"></i> 
                              <?php echo "<span style=\"font-size: 20px;\">".$loc[$count]."</span>"; ?> 
                           </span>

                           </div>
                           </div>
                  <div class="row" style="margin-top: 10px; margin-left: 40px;">
                          <div class="description">
                           <?php echo $jobdescription[$count]; ?>
                          </div>
                  </div>
                  <div class="row" style="margin-top: 10px; margin-left: 40px;">
                   <div class="col-9">
                  <h4>Category</h4>
                  <ul class="sk">
                    <li><?php echo $jobcategory[$count]; ?> </li>
                  </ul>
                </div>
              </div>
                </div>
                <div class="row" style="margin-top: 10px; margin-left: 40px;"> 
                <div class="col-3">
                  <h3 style="margin-left: 900px; margin-top: -150px;"><?php echo "Earn   "."<i class=\"fa fa-money\" style=\"margin-left:10px;\"></i>".$credits[$count] ?></h3>

                  <br>
                  <form role="form" action="apply-to-job.php" method="POST">
                    <input type="hidden" id="jobid" name="jobid" value="<?php $jobid[$count]; ?>">
                  <button class="btn btn-common"  style="margin-left: 850px; margin-top: 20px; margin-bottom: 30px; width: 200px;" name="jobid" value="<?php echo $jobid[$count]; ?>">Apply</button>
                </form>

                </div>
              </div>
              
              </div>
              </div>
              
              
              </div>
             
      </section>
      <?php 

      }

       ?>
     
    



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