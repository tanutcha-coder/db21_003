<?php
$servername = "localhost";
$username = "db21_003";
$password = "db21_003";

// Create connection
$conn = mysqli_connect($servername, $username,$password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected";
