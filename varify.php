<?php
require_once 'db_connection.php';

if(isset($_GET['vkey'])){
    //process Verification
    $vkey = $_GET['Validation_code'];


    $resultSet = Query("SELECT verified, Validation_code FROM accounts WHERE verified = 0 AND Validation_code ='$vkey' LIMIT 1");

    if($resultSet->num_rows == 1){
        //Validate the email
        $update = Query("UPDATE ACCOUNT SET verified = 1,  WHERE Validation_code ='$vkey' LIMIT 1");

    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tichatool|register</title>
   <style>
       
   </style>
</head>
<body>
    <a href=""><small class="help">help</small></a>
    <form method="POST">
        
        <input type="code" placeholder="enter code" required> <br>
        <small>code sent to email or phone</small>
            <div class="navdiv">
           
                    <button id="sendcode" type="reset" ><small>resend code</small></button>
                    <section></section>
                    <section></section>
                    <button id ="varify"type="submit" ><small>varify code</small></button>
                </div>
    </form>
    
</body>
</html>