<?php

$name = $_POST['name'];
$email = $_POST['name'];
$message = $_POST['name'];

$header = "From:" . $email . "\r\n";
$header .= "X-Mailer: PHP /" . phpversion() . "\r\n";
$header .= "mime Version: 1.0 \r\n";
$header .= "Content Type: text/plain";

$comment = "This message has been sent by " . $name .  "\r\n";
$comment .= "E-mail is: ". $email . "\r\n";
$comment .= 'His message is: '$message .  "\r\n";

$for = "ron.beshears@gmail.com";
$Subject = "Contact from Website";

mail($subject, utf8_decode($comment), $header );

echo json_encode(array( 
    'Message' => sprintf("your message has been sent %s", $name);
));