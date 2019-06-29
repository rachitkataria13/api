<?php
#$user = $_POST["name"];
#$pass = $_POST["number"];
#$token = $_POST["token"];
$email = $_POST["email"];

$params = array ('email' => $email);

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
              'http://api.romreviewer.com/protectem/registermain.php',  // page url
              false,
              $context);

// Server response is now stored in $result variable so you can process it
echo($result);
?>