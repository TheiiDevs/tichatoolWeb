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
function adminrval()
{
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $plan = clean( trim(escape($_POST['plan'])));
        $schoolname = clean( trim(escape($_POST['schoolname'])));
        $username = clean( trim(escape($_POST['username'])));
        $branch = clean( trim(escape($_POST['branch_txt'])));
        $address = clean( trim(escape($_POST['Aaddress'])));
        $country = clean( trim(escape($_POST['Acountry'])));
        $email = clean( trim(escape($_POST['Aemail'])));
        $password = clean( trim(escape($_POST['Apass'])));
        $confirm_password = clean( trim(escape($_POST['confirm_pass'])));
        //$role = clean( trim(escape($_POST['role'])));
        //$role =clean( trim(escape(['A'])));
        $role = "A";

        //validation

        $errors =[];

        

             if (empty($username) && empty($schoolname) && empty($email) && empty($password)) {
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>school name, email and password fields cannot be empty</small></div>';
                    $errors[]=2;
                    
                }else{
                    
            if (!empty($schoolname))
                {
                        //check character length
                    if ( strlen($schoolname) > 100) 
                    {
                        echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>your school name must not exceed 100</small></div>';
                        $errors[]=3;
                    }
                    //check if input characters are valid
                    elseif (!preg_match('/^[a-zA-Z- ]+$/', $schoolname))
                    {
                        echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>only hyphens and spaces are allowed to mix with letters in school name fields</small></div>';
                        $errors[]=4;
                        
                    }
                }else{ 
                    echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>please enter the name of your school</small></div>';
                        $errors[]=5;

                    }


                    if (!empty($username)) 
                    {
                            //check character length
                        if ( strlen($username) > 100) 
                        {
                            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>your login ID must not exceed 10</small></div>';
                            $errors[]=3;
                        }
                        //check if input characters are valid
                        elseif (!preg_match('/^[a-zA-Z0-9 ]+$/', $username))
                        {
                            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>only hyphens and spaces are allowed to mix with letters in login ID fields</small></div>';
                            $errors[]=4;
                            
                        }
                    }else{ 
                        echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>please create your login ID</small></div>';
                            $errors[]=5;

                        }

             
                //check character length
        if (strlen($branch) > 255 || strlen($address) > 255 )
        {
            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>letters in branch and address fields must not exceed 255</small></div>';
            $errors[]=6;
        }

        if ( strlen($password) > 100 )
        {
            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>letters in password fields fields must not exceed 100 characters or symbols</small></div>';
            $errors[]=8;
        }

            //email
            if ( empty($email)) 
            {
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small> please enter email</small></div>';
                    $errors[]=7;
            } else{
                             //check if email is valid valid
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                        {

                                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small> the email you entered is invalid</small></div>';
                                $errors[]=1;
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
                        $errors[]=10;
                }else{
                        //check password strenthvalid
                        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\~?!@#\$%\^&\*])(?=.{5})/', $password))
                        {
                            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small> password must be upto 5 letters and must contain atleast one capital letter, one symbol and one number</small></div>';
                            $errors[]=11;
                            
                        }
                    }

            }

            
            if (empty($confirm_password)) 
            {
               echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>you did not re-type your password</small></div>';
                $errors[]=16;
            
            }else{
                if ($confirm_password !== $password) 
                {
                   echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>password did not match</small></div>';
                    $errors[]=16;
                
                }
            }

            if (ID_Exists($username))
            {
                $errors[]=17;
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>this ID has been used by another user, please create a unique ID</small></div>';

            }

            if (Email_Exists($email))
            {
                $errors[]=18;
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>this email has been used by another user</small></div>';
                

            }

             
             
            
             if (count($errors)==0)
             {
                    
                    /*
                    $plan = escape($_POST['plan']);
                    $schoolname = escape($_POST['schoolname']);
                    $branch = escape($_POST['branch_txt']);
                    $address = escape($_POST['Aaddress']);
                    $country = escape($_POST['Acountry']);
                    $email = escape($_POST['Aemail']);
                    $password = escape($_POST['Apass']);
                    $confirm_password = escape($_POST['confirm_pass']);
                    $role = escape($_POST['role']);
                    */

                    $password = password_hash($password, PASSWORD_DEFAULT);

                    //to generate validation code
                     $Validation_code = md5(time() .$username);
             
                     $sql = "INSERT INTO users (schoolname, username, branch, address, country, user_email, user_password, plan, Role, Validation_Code)
                      values('$schoolname', '$username', '$branch' , '$address', '$country', '$email', '$password', '$plan', '$role', '$Validation_code')";
                     //see if this prepare statement works
                     //$stmt = mysqli_stmt_prepare($sql);
                     $result = Query($sql);
                     confirm ($result);
                     //return true;
                     if($sql){

                        $_SESSION['schooolname']=$schoolname;
                          
                        //header('location: http://' .$_SERVER['HTTP_HOST'] . 'login.php');
                     }
                  

                }
                 
              
                
                
             }
     
           
             

    
    
     
}    




