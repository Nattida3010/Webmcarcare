<?php
 
    //นำเข้าไลบรารี่ ของ google api
    require __DIR__ . '\vendor\autoload.php';


    function getClient()
    {
   
        $client = new Google_Client();//สร้าง object Google_Client Config ค่าต่างๆ
        $client->setApplicationName('My Gmail Sender');
        $client->setScopes(Google_Service_Gmail::GMAIL_SEND);
        $client->setAuthConfig('credentials.json');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

       //ถ้าเคยมีการ Authentication แล้ว จะอ่าน token จาก ไฟล์ 'token/token.json'
        $tokenPath = 'token/token.json';
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $client->setAccessToken($accessToken);
        }

       
        if ($client->isAccessTokenExpired()) {//ดูว่า token ยังใช้งานได้หรือไม่
           
            if ($client->getRefreshToken()) {

                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());

            } else {

                if (isset($_GET['code']))//ถ้า มีการ Authentication  ใหม่ จะรับค่า Code เข้ามา
                {
                    $code=$_GET["code"];//รับค่า code สำหรับ Authentication ใหม่
                   
                    //กำหนด Token ให้กับตัวแปร $client
                    $accessToken = $client->fetchAccessTokenWithAuthCode($code);

                  
                    $client->setAccessToken($accessToken);

                   

                  
                    if (array_key_exists('error', $accessToken)) {
                        throw new Exception(join(', ', $accessToken));
                    }

                    file_put_contents($tokenPath, json_encode($client->getAccessToken()));
                   //เก็บ Token ใหม่ไว้ในไฟล์ 'token/token.json'

                }
                else
                {
                    //ถ้ายังไม่ได้ Authentication ให้สร้าง link  รับและ กรอก Authentication Code
                    $authUrl = $client->createAuthUrl();

                   
                    ?>
                    <form action="index.php">

                        Code <input name="code" /><br />
                        <button>submit</button>&nbsp;
                        <a target='_blank' href='<?php echo $authUrl; ?>'>GET Code</a>

                    </form>
                    <?php
                   
                    exit();
                }

               
            }
       
        }
        return $client;
    }



$client = getClient();
$service = new Google_Service_Gmail($client);

$user = 'me';
$strSubject = 'ทดสอบ GMail API' . date('d/m/Y H:i:s');

$strRawMessage = "From: <email ต้นทาง>\r\n";
$strRawMessage .= "To:  <email ที่จะส่งถึง>\r\n";
$strRawMessage .= 'Subject: =?utf-8?B?' . base64_encode($strSubject) . "?=\r\n";
$strRawMessage .= "MIME-Version: 1.0\r\n";
$strRawMessage .= "Content-Type: text/html; charset=utf-8\r\n";
$strRawMessage .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n\r\n";
$strRawMessage .= "ทดสอบ <u><b>GMail API</b></u>!\r\n";

$mime = rtrim(strtr(base64_encode($strRawMessage), '+/', '-_'), '=');
$msg = new Google_Service_Gmail_Message();
$msg->setRaw($mime);


   
$service->users_messages->send("me", $msg);//ส่ง Email

?>