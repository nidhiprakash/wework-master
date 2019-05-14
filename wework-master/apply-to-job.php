<?php
	session_start();
 if($_SESSION['login-status'] != 1) {
         alert("Please login");
         header("location: login.php");
  }
include("config.php");
$jobid=$_POST['jobid'];

$applicantid=$_SESSION['user_id'];

$status = "incomplete";

$sql1 = "SELECT postername as last from job WHERE jobid='$jobid'";
$postername = mysqli_query($db,$sql1)->fetch_object()->last;

 	
$sql = "INSERT INTO jobapplicant (actualjobid, applicantid, status, postername) VALUES ('$jobid', '$applicantid', '$status', '$postername') ";
$result = mysqli_query($db,$sql);
if (!$result) {
  printf("Error: %s\n", mysqli_error($db));
  echo "ERROR";
  exit();
}
else{
	header("location: applied_jobs.php");
}
?>