<?php
require 'testcode/tdb.php.php';

function rolecheck(){
    $VarRole = "A";
    $sql = "SELECT * FROM users WHERE Role = '$VarRole' ";
    $result=Query($sql);
    if(fetch_data($result))
    {
        return true;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo  $user_data->username;?></title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>
    <div class="body">
    
    </div>

 
     
        <!--https://www.webtutorials.me-->
</body>
</html>