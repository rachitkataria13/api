<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
#$token = $_POST["token"];
#$msg = $_POST["msg"];

$params = array ('user' => $user, 'pass' => $pass);

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
              'http://api.romreviewer.com/data/way2api.php',  // page url
              false,
              $context);

// Server response is now stored in $result variable so you can process it
echo($result);
?>