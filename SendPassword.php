<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Mcarcare</title>
</head>
<body>
	


<?php
// include  'config.php';
session_start();
// $email= $_POST['email'];
// echo $email;
$servername = "localhost";
$username = "root";
$password = "mcarcare";
$db = "mcarcare";

$connect = mysqli_connect($servername, $username, $password, $db);

$sql = "SELECT * FROM user WHERE email = '".trim($_POST['txtemail'])."' ";
$objQuery = mysqli_query($connect,$sql);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Not Found Username or Email!";
	}
	else
	{
		echo "Your password send successful.<br>Send to mail : ".$objResult["email"];		

		$strTo = $objResult["email"];
		$strSubject = "Your Account information username and password.";
		$strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
		$strHeader .= "From: webmaster@thaicreate.com\nReply-To: webmaster@thaicreate.com";
		$strMessage = "";
		$strMessage .= "Welcome : ".$objResult["status"]."<br>";
		$strMessage .= "Username : ".$objResult["fname"]."<br>";
		$strMessage .= "Password : ".$objResult["password"]."<br>";
		$strMessage .= "=================================<br>";
		$strMessage .= "ThaiCreate.Com<br>";
		$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader); 

	}
	mysqli_close($connect);
?>

</body>
</html>