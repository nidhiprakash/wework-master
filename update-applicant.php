<?php
   session_start();
   $userid = $_SESSION['user_id'];
   $jobid = $_POST['jobid'];
   $_SESSION['jobidtopayment']=$jobid;
   echo $jobid;
   $applicantid=$_POST['applicantid']; //get this from previous page which has list of applicants
   echo $applicantid;
   $status="ACCEPTED";
   include("ConnectToAWS.php");
   $sql = "UPDATE job SET status='$status' WHERE id = '$jobid' "; //mark the job as accepted in job table so that it is not shown anywhere else anymore
   $result = mysqli_query($db,$sql);
      if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      echo "ERROR";
      exit();
      }
   $sql2 = "UPDATE job_applicant SET status='$status' WHERE job_id = '$jobid' AND user_id='$applicantid' "; //mark job as accepted only for the jobapplicant which is selected as applicantid here
   $result2 = mysqli_query($db,$sql2);
      if (!$result2) {
      printf("Error: %s\n", mysqli_error($db));
      echo "ERROR";
      exit();
      }
    header('location: account-home.php');
?>