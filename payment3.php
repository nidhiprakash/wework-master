<?php
include_once "connecttoaws.php";
//echo "DONE";
$sql1 = "SELECT `id`, `create_time`, `amount` FROM `payment_history` WHERE id='1'";
$result1 = $db->query($sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo $row["id"]."<br>" .$row["create_time"]."<br>". $row["amount"]. "<br>";
    }
}
$conn->close();
//header('Location: payment2.php');
?>
