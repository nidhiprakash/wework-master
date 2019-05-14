<?php
session_start();
include("config.php");
$jobid=$_SESSION['jobidtopayment'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobid= mysqli_real_escape_string($db,$_POST['jobid']);
  }
  
  $sql3="SELECT applicantid from jobapplicant where actualjobid='$jobid' AND status='accepted'";
  $applicantid=mysqli_query($db,$sql3)->fetch_object()->applicantid;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>payment| WeWork</title>
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
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">make payment</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    </div>


<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>
	<div class="wrapper bg-grey">
      <!-- Categories Homepage Section Start -->
      <div class = "container">
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-body">
<form action="Payment1.php" method="POST">
<?php
 $sql2="SELECT postername from job where jobid='$jobid'";
  $postername=mysqli_query($db,$sql2)->fetch_object()->postername;
$Payee=$applicantid;
$Payer=$postername;
$Payable_Coins=$_SESSION["Payable_Coins"];
?>

<center><h3 class="page-title" style="margin-bottom: 20px">Avaiable Coins: <?php 
$sql = "SELECT balance FROM user WHERE userid=$Payer";
$result = mysqli_query($db,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["balance"]. "<br>";
    }
}
 ?> </h3></center>


<table align="center" border="1px" style="padding: 10px" width="400px">
	
	<tr class="page-title" align="center" border="1px" >
		<td align="center"  >
			<center><h4 class="page-title" style="margin:5px;padding:10px;">Payee</h4></center>
		</td>
		<td align="center"  >
			<i><center><h4 class="page-title" style="margin:5px;padding:10px;">
<?php  
$sql = "SELECT firstname,lastname FROM userdetail WHERE userdetailid=$Payee";
$result = mysqli_query($db,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"]," ",$row["lastname"];
    }
}
?></h4></center></i>
		</td>
	</tr>
	<tr align="center"  >
		<td align="center"  >
			<center><h4 class="page-title" style="margin:5px;padding:5px;">Payer</h4></center>
		</td>
		<td align="center"  >
			<i><center><h4 class="page-title" style="margin:5px;padding:5px;">
<?php 
$sql = "SELECT `firstname`,`lastname` FROM `userdetail` WHERE `userdetailid`=$Payer";
$result = mysqli_query($db,$sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"]," ",$row["lastname"];
    }
}
?>
		</td></h4></center></i>
	</tr>
	<tr class="page-title" align="center" >
		<td align="center" >
			<center><h4 class="page-title" style="margin:5px;padding:5px;">Payable Coins</h4></center>
		</td>
		<td align="center">
			<i><center><h4 class="page-title" style="margin:5px;padding:5px;">
			<?php echo $Payable_Coins; ?></h4></center></i>
		</td>
	</tr>
	
</table>
<center><button type="SUBMIT" class="btn btn-common log-btn" style="text-align: center; margin: 20px;width: 400px;">Pay</button></center>
</form>
</div>
</div>
</div>
</div>
</body>
</html>

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
