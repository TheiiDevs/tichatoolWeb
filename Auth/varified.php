<?php
 require '/xampp/htdocs/tichatool/php/db.php';
 //require '/xampp/htdocs/tichatool/php/function.php'; 

if(isset($_GET['vkey']))
{
    //process Verification
    $vkey = $_GET['Validation_code'];

    $mysqli =$con = mysqli_connect('localhost' , 'root' , "" ,  'tichatooldb');

    $resultSet = $mysqli->query("SELECT verified, Validation_code FROM accounts WHERE verified = 0 AND Validation_code ='$vkey' LIMIT 1");

    if($resultSet->num_rows == 1)
    {
        //Validate the email with varificatiion code
        $update = $mysqli->query("UPDATE ACCOUNT SET verified = 1,  WHERE Validation_code ='$vkey' LIMIT 1");

        if($update)
        {
            echo '<div style=" padding:10px; width:100%; color: grey;"><small>your account has been varified, you may now login</small></div>';
        }

    }else{
        echo '<div style=" padding:10px; width:100%; color: grey;"><small>this account is invalid or already varified</small></div>';
    }


}else{
    die("something went wrong");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   <style>
       
   </style>
</head>
<body>
    
</body>
</html>