<?php
 
$mysql_server="wework.c3ofr9w38qne.us-east-2.rds.amazonaws.com";
$mysql_username="wework";
$mysql_password="wework001";
$mysql_database="wework";
$mysql_port="3306";
 
// Create connection
$db = mysqli_connect($mysql_server, $mysql_username, $mysql_password,$mysql_database, $mysql_port,'mysql');

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>