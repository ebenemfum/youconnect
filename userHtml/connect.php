<?php
$svrname = "us-cdbr-east-05.cleardb.net";
$uname = "ba0489cfbd42c2";
$pswd = "4b667e92";
$db ="heroku_7c5b6c3bdf49a1f";

// Create connection
$conn = new mysqli($svrname, $uname, $pswd,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
