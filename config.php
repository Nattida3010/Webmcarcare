<?php
$servername = "localhost";
$username = "root";
$password = "mcarcare";
$db = "mcarcare";

// Create connection
$connect = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
echo "";
?>

<!-- 
// $servername = "db";
// $username = "root";
// $password = "test";
// $db = "mcarcare";

// // Create connection
// $connect = mysqli_connect($servername, $username, $password,$db);

// // Check connection
// if ($connect->connect_error) {
//     die("Connection failed: " . $connect->connect_error);
// }
// echo ""; -->

 -->
