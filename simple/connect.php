<?php
session_start();
// ob_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dtb = "book_web";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dtb);
// $_SERVER['conn']=$conn;
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";