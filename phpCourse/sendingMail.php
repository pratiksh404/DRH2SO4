<?php

$to = "pratikdai404@gmail.com";
$subject = "this is email";
$body = "this is test email";
$header = 'from:some@123.com';

if(mail($to,$subject,$body,$header))
{
    echo "mail has been sent";
}
else{
    echo "error";
}
?>