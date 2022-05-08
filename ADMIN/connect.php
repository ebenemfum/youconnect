<?php
$svrname = "localhost";
$uname = "root";
$pswd = "";
$db ="weconnect";

// Create connection
$conn = new mysqli($svrname, $uname, $pswd,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>