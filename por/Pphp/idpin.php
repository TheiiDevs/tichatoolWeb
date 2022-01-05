<?php

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

    //email exists function
    function userID_Exists($studentID)
    {
        $studentID = clean( $_POST['studentID']);  
        
        $sql = " SELECT * FROM portal WHERE  studentID ='$studentID' LIMIT 1";
        $result = Query($sql);
        if(fetch_data($result))
        {
            return true;
        }else{
            return false;
        }
    }
    


 // process if user got here from the registration
function check_auth()
{


        if(isset($studentID))
        {
                    
            $studentID = $_GET['studentID'];

            $resultSet = Query("SELECT  studentID FROM accounts WHERE studentID ='$studentID' LIMIT 1");
            if($resultSet->num_rows == $studentID)
            {
                
                header('location:forgotPassOrID.php');

        
              
          
            }else{
                $email = $_GET['studentID'];

                $resultSet = Query("SELECT  email FROM accounts WHERE email ='$email' ");

                if(isset($email))
                {
                    header('location:portallogin.php');
                }else{
                    function id_pval()
                    {
                        if($_SERVER['REQUEST_METHOD']=='POST')
                        {
                            $studentID = clean($_POST['studentID']);
                    
                    
                    
                            //validation
                    
                            $errors =[];
                    
                            
                    
                               
                                       
                                 
                                
                                 if (count($errors)==0)
                                 {
                    
                                    
                                    if (userID_Exists($studentID))
                                    {
                                       
                                        echo '<div style=" padding:10px; width:100%; border-bottom: 0.1pt solid red;"><small>this ID has been used by another user</small></div>';
                     
                                    }  else{
                                        
                                    $studentID = escape($_POST['studentID']);
                                   
                                 
                                         $sql = "INSERT INTO portal (studsentID) values( '$studentID')";
                                 
                                         $result = Query($sql);
                                         confirm ($result);
                                         //$_SESSION['schoolname'] = $schoolname;
                                         // redirect("feeds.php");
                                          header('location: http://' .$_SERVER['HTTP_HOST'] . '/Auth_code.php');
                                         return true;
                                      
                                            /*
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
                                         */
                                       
                    
                                        }
                                     
                                  
                                    
                                    
                                 }
                         
                         }  
                        }
                }

        }
    }
}


      
             
?>