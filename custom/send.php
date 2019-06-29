<?php
#$user = $_POST["name"];
$number = $_POST["number"];
$token = $_POST["token"];
$msg = $_POST["msg"];

$params = array ('number' => $number, 'token' => $token, 'msg' => $msg);

$query = http_build_query ($params);

// Create Http context details
$contextData = array ( 
            'method' => 'POST',
            'header' => "Connection: close\r\n".
                        "Content-Length: ".strlen($query)."\r\n",
            'content'=> $query );

// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));

// Read page rendered as result of your POST request
$result =  file_get_contents (
              'http://api.romreviewer.com/custom/send.php',  // page url
              false,
              $context);

// Server response is now stored in $result variable so you can process it
echo($result);
?>