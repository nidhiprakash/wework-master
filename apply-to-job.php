<?php
	session_start();
 if($_SESSION['login-status'] != 1) {
         alert("Please login");
         header("location: login.php");
  }
include("ConnectToAWS.php");
$jobid=$_POST['jobid'];

$applicantid=$_SESSION['user_id'];

$status = "WORKINGING";

$sql1 = "SELECT poster_id as last from job WHERE id='$jobid'";
$postername = mysqli_query($db,$sql1)->fetch_object()->last;

 	
$sql = "INSERT INTO job_applicant (job_id, user_id, status) VALUES ('$jobid', '$applicantid', '$status') ";
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