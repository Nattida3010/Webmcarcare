<?
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Document</title>
</head>
<body>

<?php
require __DIR__ . '/vendor/autoload.php';

// if (php_sapi_name() != 'cli') {
//     throw new Exception('This application must be run on the command line.');
// }

/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Gmail API PHP Quickstart');
    $client->setScopes(array(
        'https://mail.google.com/',
        'https://www.googleapis.com/auth/gmail.compose'
    ));
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // // If there is no previous token or it's expired.
    // if ($client->isAccessTokenExpired()) {
    //     // Refresh the token if possible, else fetch a new one.
    //     if ($client->getRefreshToken()) {
    //         $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
    //     } else {
    //         // Request authorization from the user.
    //         $authUrl = $client->createAuthUrl();
    //         printf("Open the following link in your browser:\n%s\n", $authUrl);
    //         print 'Enter verification code: ';
    //         $authCode = trim(fgets(STDIN));

    //         // Exchange authorization code for an access token.
    //         $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
    //         $client->setAccessToken($accessToken);

    //         // Check to see if there was an error.
    //         if (array_key_exists('error', $accessToken)) {
    //             throw new Exception(join(', ', $accessToken));
    //         }
    //     }
    //     // Save the token to a file.
    //     if (!file_exists(dirname($tokenPath))) {
    //         mkdir(dirname($tokenPath), 0777, true);
    //     }
    //     file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    // }
    return $client;
}

$client = getClient();
$service = new Google_Service_Gmail($client);
try {
    include  'config.php';
    session_start();

    $email = $_POST['email'];

$sql = 'SELECT * FROM user WHERE email = "'.$_POST['email'].'" AND status = "Admin"'; 
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);
$objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);

if($numrows==0){
    echo" <script>
    swal({
      title: 'ไม่พอข้อมูล',
      text: 'กรุณาลองใหม่อีกครั้ง!',
      icon: 'warning',
      button: 'OK',
    }).then(function () {
      window.location.href='login.php';
    }, function (dismiss) {
        return false;
    })
    </script>";

 
}else{ 
 
 $strSubject = "กรุณาตรวจสอบอีเมล์ของท่าน ";
 $strRawMessage = "From: Mcarcare<mcarcare.service@gmail.com>\r\n";
 $strRawMessage .= "To: <$email>\r\n";
 $strRawMessage .= "Subject: =?utf-8?B?" . base64_encode($strSubject) .     "?=\r\n";
 $strRawMessage .= "MIME-Version: 1.0\r\n";
 $strRawMessage .= "Content-Type: text/html; charset=utf-8\r\n";
 $strRawMessage .= "Content-Transfer-Encoding: base64" . "\r\n\r\n";
 $strRawMessage .=  "สวัสดี คุณ   ".$objResult["fname"]." <br><br>";
 $strRawMessage .=  "รหัสผ่านของท่านคือ  : ".$objResult["password"]."<br>";


 $mime = rtrim(strtr(base64_encode($strRawMessage), '+/', '-_'), '=');
 $msg = new Google_Service_Gmail_Message();
 $msg->setRaw($mime);
 $service->users_messages->send("me", $msg);
 echo" <script>
 swal({
    title: 'เรียบร้อย',
    text: 'กรุณาตรวจสอบอีเมล์',
    icon: 'success',
    button: 'OK',
  }).then(function () {
    window.location.href='login.php';
  }, function (dismiss) {
      return false;
  })
 </script>";
 
}   

} catch (Exception $e) {
    print "An error occurred: " . $e->getMessage();
}


?>
</body>
</html>

<?php
 ob_end_flush();
  ?>