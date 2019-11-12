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
    $client->setScopes(Google_Service_Gmail::GMAIL_READONLY);
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

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}

// Visit https://developers.google.com/gmail/api/quickstart/php
// for an example of how to build the getClient() function.
// $client = getClient();


// $service = new \Google_Service_Gmail($client);
// $mailer = $service->users_messages;

// $message = (new \Swift_Message('Here is my subject'))
//     ->setFrom('puinun.2015@gmail.com')
//     ->setTo(['znunun@gmail.com' => 'Test Name'])
//     ->setContentType('text/html')
//     ->setCharset('utf-8')
//     ->setBody('<h4>Here is my body</h4>');

// $msg_base64 = (new \Swift_Mime_ContentEncoder_Base64ContentEncoder())
//     ->encodeString($message->toString());

// $message = new \Google_Service_Gmail_Message();
// $message->setRaw($msg_base64);
// $message = $mailer->send('me', $message);
// print_r(gettype($message));

// $user_to_impersonate = "Puinun.2015@gmail.com";
//     //putenv("GOOGLE_APPLICATION_CREDENTIALS=google-api-php-client/service-account-credentials.json");
//     $client = new Google_Client();
//     $client->useApplicationDefaultCredentials();
//     $client->setSubject($user_to_impersonate);
//     $client->setApplicationName("My Mailer");
//     $client->setScopes(["https://www.googleapis.com/auth/gmail.compose"]);
//     $service = new Google_Service_Gmail($client);
//     // Process data
//     try {
//         $strSubject = "Set the email subject here";
//         $strRawMessage = "From: Me<Puinun.2015@gmail.com>\r\n";
//         $strRawMessage .= "To: Foo<znunun@gmail.com>\r\n";
//         // $strRawMessage .= "CC: Bar<znunun@gmail.com>\r\n";
//         $strRawMessage .= "Subject: =?utf-8?B?" . base64_encode($strSubject) . "?=\r\n";
//         $strRawMessage .= "MIME-Version: 1.0\r\n";
//         $strRawMessage .= "Content-Type: text/html; charset=utf-8\r\n";
//         $strRawMessage .= "Content-Transfer-Encoding: base64" . "\r\n\r\n";
//         $strRawMessage .= "Hello World!" . "\r\n";
//         // The message needs to be encoded in Base64URL
//         $mime = rtrim(strtr(base64_encode($strRawMessage), '+/', '-_'), '=');
//         $msg = new Google_Service_Gmail_Message();
//         $msg->setRaw($mime);
//         //The special value **me** can be used to indicate the authenticated user.
//         $service->users_messages->send("me", $msg);
//     } catch (Exception $e) {
//         print "An error occurred: " . $e->getMessage();
//     }
$client = getClient();
$service = new Google_Service_Gmail($client);
try {
    $strSubject = "Verificaion mail";
    $strRawMessage = "From: Me<Puinun.2015@gmail.com>\r\n";
    $strRawMessage .= "To: manoj<znunun@gmail.com>\r\n";
    $strRawMessage .= "CC: rammanoj<znunun@gmail.com>\r\n";
    $strRawMessage .= "Subject: =?utf-8?B?" . base64_encode($strSubject) .     "?=\r\n";
    $strRawMessage .= "MIME-Version: 1.0\r\n";
    $strRawMessage .= "Content-Type: text/html; charset=utf-8\r\n";
    $strRawMessage .= "Content-Transfer-Encoding: base64" . "\r\n\r\n";
    $strRawMessage .= "A simple verification mail!" . "\r\n";
    $mime = rtrim(strtr(base64_encode($strRawMessage), '+/', '-_'), '=');
    $msg = new Google_Service_Gmail_Message();
    $msg->setRaw($mime);
    $service->users_messages->send("me", $msg);
} catch (Exception $e) {
    print "An error occurred: " . $e->getMessage();
}
?>
