<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $to = "lure.rm19@gmail.com"; 
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $headers = "From:" . $from;
    $subject = "You have a message sent from your site";

    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"email"} = "email"; 
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
    
    $send = mail($to, $subject, $body, $headers);

?>