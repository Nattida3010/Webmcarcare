<?php
$servername = "localhost";
$username = "root";
$password = "addmin";
$db = "mcarcare_db";

$connect = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($connect,"utf8");



if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo ".";
}

?>
