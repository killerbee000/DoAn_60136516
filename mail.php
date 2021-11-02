<?php

$to_email = "killerbee0088@gmail.com";
$subject = "Simple email test via PHP";
$body = "hello";
$headers = "From: email";

if(mail($to_email,$subject,$body,$headers))
{
    echo "OK";
}
else{
    echo "Failed";
}
?>