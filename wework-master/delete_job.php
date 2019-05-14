	<?php
	   session_start();
	   $userid = $_SESSION['user_id'];
	   $jobid = $_POST['jobid'];
	   echo $jobid;
	   include("config.php");
	   $sql = "DELETE FROM `job` WHERE jobid ='$jobid'";
	   $result = mysqli_query($db,$sql);
	   if (!$result) {
	   header("location: template.php");
	   }
	   else{
	   	header("location: myjobs.php");
	   }

	  ?>