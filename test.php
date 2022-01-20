
<?php
//id=Micfad19
//password:@Ss2sedf
{$_SESSION["profile_image"]}

<?php
require '/xampp/htdocs/tichatool/php/db.php';
      $sql = " SELECT * FROM users";
      $result = Query($sql);
      if(mysqli_fetch_assoc($result) < 0)
      {
          while(mysqli_num_rows($result)){

          ?>
    
     <img style="width: 100%; height: 100%; border-radius: 50%;" id="stAvata" onerror="this.src= '/defaults/studAvater.jpg';" src="/profile_img/<?php echo $row["profile_image"]?>">
 <?php
       }
    
         
  }
  

?>
<script>
const reswidth = screen.width;

if (reswidth < 1020) {
    document.write('   <link rel="stylesheet" type="text/css" href="/css/portalMobile.css" />');
} else {
    document.write(' <link rel="stylesheet" type="text/css" href="/css/portalDesktop.css" />');
}
</script>


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
