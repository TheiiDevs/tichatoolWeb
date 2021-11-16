<?php




//set session message
function set_message($msg)
{
 
    if(!$msg){
        $_SESSION['Message']=$msg;
    }else{
        $msg="";
    }
    
}

//redirection
function redirect($location)
{
    return header("location:{$location}");
}

//Display Message Function
function display_message()
{
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}




//Generate Token Function
function Token_Generator()
{
    $token= $_SESSION['token']=md5(uniqid(mt_rand(), true));
    return $token;
}




?>