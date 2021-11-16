<?php

   require_once 'db_connection.php';
    //require_once 'functions.php';


//functions

    //email exists function
    function Email_Exists($email)
    {
            
        
        $sql = " SELECT * FROM admin WHERE  email ='$email' LIMIT 1";
        $result = Query($sql);
        if(fetch_data($result))
        {
            return true;
        }else{
            return false;
        }
    }
    




//i decided to put the validation in a function so i out put error msg in front-end
function adminrval()
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $plan = clean($_POST['plan']);
        $schoolname = clean( $_POST['schoolname']);
        $branch = clean($_POST['branch_txt']);
        $address = clean($_POST['Aaddress']);
        $country = clean($_POST['Acountry']);
        $email = clean($_POST['Aemail']);
        $password = clean($_POST['Apass']);
        $confirm_password = clean($_POST['confirm_pass']);


        //validation

        $errors =[];

        

             if (empty($schoolname) && empty($email) && empty($password)) {
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

             
                //check character length
        if (strlen($branch) > 255 || strlen($address) > 255 )
        {
            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>letters in branch and address fields must not exceed 255</small></div>';
            $errors[]=6;
        }

        if ( strlen($password) > 255 )
        {
            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>letters in password fields fields must not exceed 255</small></div>';
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
                        //check if email is valid valid
                        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\~?!@#\$%\^&\*])(?=.{5,})/', $password))
                        {
                            echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small> password must be upto 5 letters and must contain atleast one capital letter, one symbol and one number</small></div>';
                            $errors[]=11;
                            
                        }
                    }

            }

        

             if ($confirm_password !== $password) 
             {
                echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>password did not match</small></div>';
                 $errors[]=13;
             
             }

             
             
            
             if (count($errors)==0)
             {

                
                if (Email_Exists($email))
                {
                   
                    echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>this email has been used by another user</small></div>';
 
                }  else{
                    
                $plan = escape($_POST['plan']);
                $schoolname = escape( $_POST['schoolname']);
                $branch = escape($_POST['branch_txt']);
                $address = escape($_POST['Aaddress']);
                $country = escape($_POST['Acountry']);
                $email = escape($_POST['Aemail']);
                $password = escape($_POST['Apass']);

                    $password = password_hash($password, PASSWORD_DEFAULT);

                    //to generate validation code
                     $Validation_code = md5(time() .$schoolname);
             
                     $sql = "INSERT INTO admin (schoolname, branch, address, country, email, password, plan, Validation_Code) values('$schoolname' , ' $branch' , '$address' , '$country' , '$email', '$password', '$plan', '$Validation_code')";
             
                     $result = Query($sql);
                     confirm ($result);
                     //$_SESSION['schoolname'] = $schoolname;
                     // redirect("feeds.php");
                      header('location: http://' .$_SERVER['HTTP_HOST'] . '/Auth_code.php');
                     return true;
                  

                     if($sql){
                         //send Varification email
                         $to = $email;
                         $subject = "Email Varification";
                         $message = "<a href='http://localhost/reistration/verify.php?vVarification_code'>Register Account</a>";
                         $headers = "From: theiibuilderes@gmail.com \r\n";
                         $headers = "MIME-Version: 1.0" . "\r\n";
                         $headers = "Content-type: text/html;charset=UTF-8" . "\r\n";

                         mail($to,$subject,$message,$headers);

                         header('location:thankyou.php');


                     }
                   

                    }
                 
              
                
                
             }
     
     }        
             

    
    
     
}    




