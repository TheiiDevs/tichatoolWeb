<?php

  $db_host = "localhost";
  $db_name = "tichatool";
  $db_username = "root";
  $db_password = "";

$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
/*
$con = mysqli_connect('localhost' , 'root' , "" ,  'tichatooldb');
*/
if(!$con){
	die("failed to connect");
}

function clean($string)
{
    global $con;
    return htmlentities($string);
}





function escape($string)
{
    global $con;
    return mysqli_real_escape_string($con,$string);
}


//querie function
function Query($query)
{
    global $con;
    return mysqli_query($con,$query);
}


//confirmation function
function confirm($result)
{
    global $con;
    if(!$result){
        die('Query Failed' .mysqli_error($con));
    }
    
}

//fetch data from databae
function fetch_data($result)
{
    return mysqli_fetch_assoc($result);
}



 function varified()
 {
  
     $sql = " SELECT * FROM users WHERE  varified ='{$_SESSION["varified"]}'" ;
     $result = Query($sql);
     $row = mysqli_fetch_array($result);
     //$row =fetch_data($result);
     if(!empty($row['varified']))
     {
         return true;
     }else{
        return false;
     }
 }

 //email exists function
function Email_Exists($email)
{
    //$email = clean( $_POST['email']);  
    
    $sql = " SELECT * FROM users WHERE  user_email ='$email' LIMIT 1";
    $result = Query($sql);
    if(fetch_data($result))
    {
        return true;
    }else{
        return false;
    }
}

//profile image exists function
function ProfileImg_Exists()
{  
    
    $sql = " SELECT * FROM users WHERE  profile_image ='{$_SESSION["profile_image"]}'";
    $result = Query($sql);
    if(fetch_data($result))
    {
        return true;
    }else{
        return false;
    }
}



//ID exists function
function ID_Exists($username)
{
    $studentID = clean( $_POST['studentID']);  
    
    $sql = " SELECT * FROM users WHERE  username ='$username' LIMIT 1";
    $result = Query($sql);
    if(fetch_data($result))
    {
        return true;
    }else{
        return false;
    }
}
 


/*
//
	// Global Variables
	define('MAX_LOGIN_ATTEMPTS_PER_HOUR', 5);
	define('MAX_EMAIL_VERIFICATION_REQUESTS_PER_DAY', 3);
	define('MAX_PASSWORD_RESET_REQUESTS_PER_DAY', 3);
	//define('PASSWORD_RESET_REQUEST_EXPIRY_TIME', 60*60);
	define('CSRF_TOKEN_SECRET', '<change me to something random>');

	//define('VALIDATE_EMAIL_ENDPOINT', 'http://localhost/YouTube/SecureAccountSystem/validate'); #Do not include trailing /
	//define('RESET_PASSWORD_ENDPOINT', 'http://localhost/Youtube/SecureAccountSystem/resetpassword'); #Do not include trailing /

	// Code we want to run on every page/script
	date_default_timezone_set('UTC'); 
	//error_reporting(0);
	session_set_cookie_params(['samesite' => 'Strict']);
	//session_start(); */