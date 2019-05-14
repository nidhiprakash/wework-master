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
//echo "DONE";
$sql1 = "SELECT `id`, `create_time`, `amount` FROM `payment_history` WHERE id='123'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo $row["id"]."<br>" .$row["create_time"]."<br>". $row["amount"]. "<br>";
    }
}
$conn->close();
//header('Location: payment2.php');
?>
