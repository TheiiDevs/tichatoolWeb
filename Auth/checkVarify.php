
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tichatool|register</title>
    <style type="text/css">

    @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
     body{
       display: flex;
       justify-content: center;
       background-color: white;
      font-family: "Poppins", sans-serif;
       
     }

        form {
          width: 350px;
          display: flex;
          justify-content: center;
          }

            button {
          background-color: rgb(250, 25, 100);
          border-radius: 5px;
          padding: 3px;
          width: 100px;
          border: none;
          color: #fff;
        }
          
   </style>
</head>
<body>
<!-- this page will pop up everytime a user login until email is varified. -->
<form method="POST">

            <div>
            <span>please varify your account. It's the only way we can be
              sure you  have access to your email. please do this within a week.</span>
            </div>
           <span>please click on varify to varify your account</span>
           <br>
                 
                    <button name ="varifybtn" ><small>varify now</small></button>
                    <button name ="unvarifybtn" ><small>varify later</small></button>
 </form>

        <?php
         session_start();
         require '/xampp/htdocs/tichatool/php/db.php';
        if(!isset($_SESSION['id']) && !isset($_SESSION['username'])){
          header('location: http://' .$_SERVER['HTTP_HOST'] . '/login.php');
          exit;
           
        }else{
          if(varified())
          {
                if(Role_Exists())
                {
                    header('location:adm/feeds.php');
            
                }else{
                  header('location:por/portal.php'); 
            
                } 
      
          }else{

                    
        //functions

         



         
        if (isset($_POST['varifybtn']))
               {
                   if (isset($_GET['Validation_Code']))
                   {
                       $email = $_GET['email'];
                       $vkey = $_GET['Validation_code'];
                      
   
                       $con = $mysqli->query("SELECT email, Validation_Code FROM accounts WHERE email = $email AND Validation_Code ='$vkey' LIMIT 1");
                          //send Varification email
                          $to = $email;
                          $subject = "Email Varification";
                          $message = "<a href='http://localhost/reistration/verify.php?$vkey=Varification_code'>varify Account</a>";
                          $headers = "From: theiibuilderes@gmail.com \r\n";
                          $headers = "MIME-Version: 1.0" . "\r\n";
                          $headers = "Content-type: text/html;charset=UTF-8" . "\r\n";
   
                          mail($to,$subject,$message,$headers);
   
                          if ( mail($to, $subject, $body, $header)) {
                          echo ' <div style=" padding:10px; width:100%; color: grey; text-align:center;><span> we sent you an email. please check your email to varify your account</span> </div>';
                           
                        } else {
                           echo ' <div style=" padding:10px; width:100%; color: red; text-align:center;><span>something went wrong. please try again.</span> </div>';
                          
                        }
   
                   }
                  

                   
               }


             if(isset($_POST['unvarifybtn']))
             { 
               
           
               if (Role_Exists())
               {
       
                header('location:/adm/feeds.php');

   
              }else {
               header('location:/por/portal.php'); 

              }
                 
                
               
               
           }

              }
        }
        
      
            
      

            ?>
        
    
    
</body>
</html>