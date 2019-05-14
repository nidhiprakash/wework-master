<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newwework";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Payee_ID=$_SESSION["Employer"] = "102";
$Payer_ID=$_SESSION["Employee"] = "103";
//echo "DONE";
$sql1 = "SELECT `balance` FROM `user` WHERE `userid`='$Payee_ID'";
$sql2 = "SELECT `balance` FROM `user` WHERE `userid`='$Payer_ID'";
/*
$sqlTID="SELECT MAX(`Transaction_ID`) FROM `payment_history`";
$resultTID=$conn->query($sqlTID);
if ($resultTID->num_rows > 0) {
	while($row12 = $resultTID->fetch_assoc())
	{
	       $TID = $row12["Transaction_ID"];
	}
}
*/
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        $c1=$row["balance"];
    }
}
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $c2=$row["balance"];
    }
}
if($c2>50){
$c3 = $c2 + 50;
$c4 = $c1 - 50;
$sql3 = "UPDATE `user` SET `balance`=$c3 WHERE userid='103'";
$sql4 = "UPDATE `user` SET `balance`=$c4 WHERE userid='102'";
$sql5 = "INSERT INTO `payment_history`(`Transaction_ID`, `Payee_ID`, `amount`,`Payer_ID`, `Status`) VALUES (1,'$Payee_ID','20','$Payer_ID','Completed')";
//$sql6 = "INSERT INTO `payment_history`(`id`, `user_id`, `create_time`, `amount`, `status`) VALUES ('1234','1234',date('h:i:sa'),'-50','done')";
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
//$result5 = $conn->query($sql5);
}
else {
	echo "You don't have sufficient balance";
}
//$result6 = $conn->query($sql6);
$conn->close();
header('Location: payment2.php');
?>
