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
$Payee_ID=$_SESSION["Employer"];// = "102";
$Payer_ID=$_SESSION["Employee"];// = "104";
$sqlTID="SELECT MAX(`Transaction_ID`) FROM `payment_history`";
$resultTID=$conn->query($sqlTID);
if ($resultTID->num_rows > 0) {
    // output data of each row
    while($row = $resultTID->fetch_assoc()) {
        $TID=$row["Transaction_ID"]+1;
    }
}
$sql5 = "INSERT INTO `payment_history`(`Transaction_ID`, `Payee_ID`, `amount`,`Payer_ID` `status`) VALUES ('$TID','105','20','109','Completed')";

$result5 = $conn->query($sql5);
$conn->close();
header('Location: payment2.php');
?>
