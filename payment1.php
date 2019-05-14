<?php
include_once "connecttoaws.php";
session_start();
$Payee=$_POST["Payee"];
$job_id=$_POST["jobid"];
$Payer=$_POST["Payer"];
$Payable_Coins=$_POST["Payable_coins"];
//echo "DONE";
$sql1 = "SELECT `balance` FROM `user` WHERE `id`=$Payer";
$sql2 = "SELECT `balance` FROM `user` WHERE `id`=$Payee";
$result1 = $db->query($sql1);
$result2 = $db->query($sql2);
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
$c3 = $c2 + $Payable_Coins;
$c4 = $c1 - $Payable_Coins;
$sql3 = "UPDATE user SET balance=$c3 WHERE id=$Payee";
$sql4 = "UPDATE user SET balance=$c4 WHERE id=$Payer";
$sql5 = "INSERT INTO payment_history (payee_id, payer_id, job_id, create_time, amount, status) VALUES ($Payee,$Payer, $job_id, date('h:i:sa'),$Payable_Coins,'SUCCESSFUL')";
//$sql6 = "INSERT INTO `payment_history`(`id`, `user_id`, `create_time`, `amount`, `status`) VALUES ('1234','1234',date('h:i:sa'),'-50','done')";
$result3 = $db->query($sql3);
$result4 = $db->query($sql4);
$result5 = $db->query($sql5);
//$result6 = $conn->query($sql6);
$db->close();
header('Location: payment2.php');
?>
