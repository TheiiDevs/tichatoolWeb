<?php
require '/xampp/htdocs/tichatool/php/db.php';
// include common_session.php to Check if the user is already logged in, if yes then redirect them
require '/xampp/htdocs/tichatool/php/Common_session.php';
/*
//functions

$con = mysqli_connect('localhost' , 'root' , "" ,  'tichatooldb');

//clean string values function
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

//Row value from data base
function row_count($count)
{
    return mysqli_num_rows($count);
}
*/  



//i decided to put the validation in a function so i out put error msg in front-end
function studval()
{
  

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $surname = clean( trim(escape($_POST['surname'])));
        $firstName = clean( trim(escape($_POST['firstName'])));
        $midName = clean( trim(escape($_POST['midName'])));
        $username = clean( trim(escape( $_POST['studentID'])));
        $age = clean( trim(escape('y-m-d' , strtotime($_POST['age']))));
        $gender = clean( trim(escape($_POST['gender'])));
        $country = clean( trim(escape($_POST['country'])));
        $address = clean( trim(escape($_POST['address'])));
        $email = clean( trim(escape($_POST['email'])));
        $password = clean( trim(escape($_POST['password'])));
        $confirm_password = clean( trim($_POST['confirm_pass']));
           //$grade = escape(strtolower($_POST['grade']));


        //validation

        $errors =[];

        

             if (empty($surname) && empty($firstName) && empty($midName) && empty($username) 
              && empty($age) && empty($grade) && empty($email) && empty($password)) {
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>all fields cannot be empty</small></div>';
                    $errors[]=1;
                    
                }else{
                    if (!empty($surname) ||  !empty($firstName) || !empty($midName)) 
        {
                 //check character length
            if ( strlen($surname) > 50 && strlen($firstName) > 100 && strlen($midName) > 100) 
            {
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>your names must not exceed 100</small></div>';
                 $errors[]=2;
            }
              //check if input characters are valid
            elseif (!preg_match('/^[a-zA-Z- ]+$/', $surname))
            {
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>only hyphens and spaces are allowed to mix with letters in name fields</small></div>';
                $errors[]=3;
                
            }
        }else{ 
            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>please enter all name fields</small></div>';
                $errors[]=4;

             }

             //student ID
             if ( !empty($username)) 
             {
                      //check character length
                 if ( strlen($username) > 50 ) 
                 {
                     echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>student ID must not exceed 20</small></div>';
                      $errors[]=5;
                 }
                   //check if input characters are valid
                 elseif (!preg_match('/^[a-zA-Z1-9- ]+$/', $username))
                 {
                     echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>only hyphens,spaces,numbers and letters are allowed</small></div>';
                     $errors[]=6;
                     
                 }
             }else{ 
                 echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>please create a unique student ID</small></div>';
                     $errors[]=7;
     
                  }

                //check character length
        if ( strlen($address) > 255 )
        {
            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>letters in branch and address fields must not exceed 255</small></div>';
            $errors[]=10;
        }
 

            //email
            if ( empty($email)) 
            {
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small> please enter email</small></div>';
                    $errors[]=12;
            } else{
                             //check if email is valid valid
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                        {

                                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small> the email you entered is invalid</small></div>';
                                $errors[]=13;
                         } /*else if (!checkdnsrr(substr($email, strpos($email, '@') + 1), 'MX'))
                            {
                                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>the email you entered is invalid. please enter a valid email</small></div>';
                                $errors[]=9;
                            }

                            */
                       
                            
                    }
                   
                    
                if ( empty($password))
                {
                    echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small> please enter password</small></div>';
                        $errors[]=8;
                }else{
                    if ( strlen($password) > 100 )
                    {
                        echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>letters in password fields fields must not exceed 100 characters or symbols</small></div>';
                        $errors[]=9;
                    }
                        //check password strenthvalid
                        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\~?!@#\$%\^&\*])(?=.{5})/', $password))
                        {
                            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small> password must be upto 5 letters and must contain atleast one capital letter, one symbol and one number</small></div>';
                            $errors[]=14;
                            
                        }
                    }

            }

            if (empty($confirm_password)) 
            {
               echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>you did not re-type your password</small></div>';
                $errors[]=15;
            
            }else{
                if ($confirm_password !== $password) 
                {
                   echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>password did not match</small></div>';
                    $errors[]=16;
                
                }
            }


             
             
            
             if (count($errors)==0)
             {

                
                if (ID_Exists($username))
                {
                   
                    echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>this ID has been used by another user, please create a unique ID</small></div>';
 
                }  else{
                    
    
                  

                    $password = password_hash($password, PASSWORD_DEFAULT);

                    //to generate validation code
                     $Validation_code = md5(time() .$username);
                     //strtolower($grade);
             
                     $sql = "INSERT INTO users ( username, address, country, user_email,  user_password, surname, first_name, middle_name, gender, DOB, validation_Code) 
                     values('$username', '$address', '$country' , '$email', '$password', ' $surname' ,' $firstName' ,' $midName' , ' $gender', ' $age' , '$Validation_code')";
             
                     $result = Query($sql);
                     confirm ($result);
                     //return true;
                  
            
                     if($sql){
                       
                         header('location: http://' .$_SERVER['HTTP_HOST'] . 'login.php');
                         /*
                      //send Varification email
                         $to = $email;
                         $subject = "Email Varification";
                         $message = "<a href='http://localhost/reistration/verify.php?vVarification_code'>Register Account</a>";
                         $headers = "From: theiibuilderes@gmail.com \r\n";
                         $headers = "MIME-Version: 1.0" . "\r\n";
                         $headers = "Content-type: text/html;charset=UTF-8" . "\r\n";

                         mail($to,$subject,$message,$headers);

                         header('location:thankyou.php');
                        */

                     }
                   

                    }
                 
              
                
                
             }
     
     }        
             

    
    
     
}    

?>


