
<?php
//id=Micfad19
//password:@Ss2sedf


//$port=ini_set('smtp_port', 465);
$to_email = "theiibuilders@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";

$headers = "From: sender\'s email";


if (mail($to_email, $subject, $body,$headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}


/*
    $to = 'theiibuilders@gmail.com';
    $subject = 'test email';
    $message = "Hello World!\n\nThis is my firat mail";
    $headers = "From: mykiefad@gmail.com\r\nReply-To: mykiefad@gmail.com";
    $mail_sent = mail ($to, $subject, $message, $headers);
        if($mail_sent==true){
            echo "mail sent";

        }else{
            echo "mail failed";
        }
        */
?>
