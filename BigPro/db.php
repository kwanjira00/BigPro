<?php
$servername = "localhost";
$username = "root";       //phpmyadmin
$password = "";           //phpmyadmin
$db_name = "db_bigpro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>