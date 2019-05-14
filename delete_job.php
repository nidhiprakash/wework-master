	<?php
	   session_start();
	   $userid = $_SESSION['user_id'];
	   $jobid = $_POST['jobid'];
	   include("config.php");
	   $sql = "DELETE FROM `job` WHERE id ='$jobid'";
	   $result = mysqli_query($db,$sql);
	   if (!$result) {
	   header("location: account-home.php");
	   }
	   else{
	   	header("location: myjobs.php");
	   }

	  ?>