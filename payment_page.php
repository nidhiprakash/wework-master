<?php
include "connecttoaws.php";
session_start();
$userid=$_SESSION['user_id'];

$sql2="SELECT balance FROM user where id='$userid'"; 
$balance = mysqli_query($db,$sql2)->fetch_object()->balance;

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
                            <li class="active"><a href="view_profile.php">Profile</a></li>
                            <li><a href="myjobs.php">My Jobs</a></li>
                            <li><a href="applied_jobs.php">Applied Jobs</a></li>
                            <li><a href="#">Messages</a></li>
                          </ul>
                    <div class="collapse navbar-collapse" id="navbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="postadd">
                          <a class="btn btn-common btn-text" href="post-job.php"><span class="fa fa-plus-circle"></span> Post an Ad</a>
                        </li>
                        <li><a href="payment.php"><i class="fa fa-credit-card"></i> Balance: <?php echo $balance;?></a></li>
                        <li><a href="logout.php"><i class="lnr lnr-user"></i> Logout</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </nav>
    </div>
    <!-- Header Section End -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">PAYMENT</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Enter your code here -->
  
<form action="payment1.php" method="POST">
<?php
//session variables
$Payee=$_POST["payee"];
$job_id=$_POST["jobid"];
$Payer=$_SESSION['user_id'];

$Payable_Coins=0;

$sql = "UPDATE wework.job_applicant SET status='SUCCESSFUL' WHERE job_id = '$job_id' AND user_id = '$Payee' ";
$result= mysqli_query($db,$sql);


$sql101 = "SELECT wage FROM wework.job where id='$job_id' ";
$result101 = mysqli_query($db,$sql101);
if($result101->num_rows > 0){
  while($row = $result101->fetch_assoc()){
    $Payable_Coins = $row["wage"];
  }
}
?>

<table align="center" style="text-align:left;"  class="page-title">
    <tr>
      <td align="center" style="font-size: 20px; margin:10px; text-align:left; padding:10px;" border="1px" class="page-title">
        AVAILABLE COINS :
      </td>
      <td style="font-size: 15px;text-align:right;padding:10px;font-style: italic;">
        <?php 
        $sql = "SELECT `balance` FROM wework.user WHERE id='$Payer' ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["balance"]. "<br>";
    }
}
 ?>
</td>
 </tr>

    <tr>
      <td align="center" style="font-size: 20px; margin:10px; text-align:left; padding:10px;" border="1px" class="page-title">
        PAYEE :
      </td>
      <td style="font-size: 15px;text-align:right;padding:10px;font-style: italic;">
        <?php 
        $sql = "SELECT `first_name`,`last_name` FROM `user_detail` WHERE `id`=$Payee";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["first_name"]," ",$row["last_name"];
    }
}
 ?>
</td>
 </tr>
 <tr>
      <td align="center" style="font-size: 20px; margin:10px; text-align:left; padding:10px;" border="1px" class="page-title">
        PAYER :
      </td>
      <td style="font-size: 15px;text-align:right;padding:10px;font-style: italic;">
        <?php 
        $sql1 = "SELECT user_detail_id FROM wework.user WHERE id = '$Payer'";
        $user_detail_id = mysqli_query($db,$sql1)->fetch_object()->user_detail_id;

        $sql = "SELECT first_name, last_name FROM wework.user_detail WHERE id = '$user_detail_id' ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["first_name"]," ",$row["last_name"];
    }
}
 ?>
</td>
 </tr>
 <tr>
      <td align="center" style="font-size: 20px; margin:10px; text-align:left; padding:10px;" border="1px" class="page-title">
        PAYABLE COINS :
      </td>
      <td style="font-size: 15px;text-align:right;padding:10px;font-style: italic;">
        <?php echo $Payable_Coins; ?>
</td>
 </tr>



  <tr>
    <td align="center" style="font-size: 20px; text-align:right; right-margin:10px;  padding:30px;" border="1px" class="page-title">
        
      <button type="SUBMIT">Pay</button>
    </td>
  </tr>
</table>
<input type="hidden" name=Payer id=Payer value="<?php echo $Payer; ?>">
<input type="hidden" name=Payee id=Payee value="<?php echo $Payee; ?>">
<input type="hidden" name=jobid id=jobid value="<?php echo $job_id; ?>">
<input type="hidden" name=Payable_coins id=Payable_coins value="<?php echo $Payable_Coins; ?>">


</form> 
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