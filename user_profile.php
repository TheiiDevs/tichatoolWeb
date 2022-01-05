<?php
require 'php/init.php';

if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    if(isset($_GET['id'])){
        $user_data = $user_obj->find_user_by_id($_GET['id']);
        if($user_data ===  false){
            header('Location: profile.php');
            exit;
        }
        else{
            if($user_data->id == $_SESSION['user_id']){
                header('Location: profile.php');
                exit;
            }
        }
    }
}
/*
else{
    header('Location: logout.php');
    exit;
}
*/
// CHECK FRIENDS
$is_already_friends = $frnd_obj->is_already_friends($_SESSION['user_id'], $user_data->id);
//  IF I AM THE REQUEST SENDER
$check_req_sender = $frnd_obj->am_i_the_req_sender($_SESSION['user_id'], $user_data->id);
// IF I AM THE REQUEST RECEIVER
$check_req_receiver = $frnd_obj->am_i_the_req_receiver($_SESSION['user_id'], $user_data->id);
// TOTAL REQUESTS
//$get_req_num = $frnd_obj->request_notification($_SESSION['user_id'], false);
// TOTAL FRIENDS
//$get_frnd_num = $frnd_obj->get_all_friends($_SESSION['user_id'], false);

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
    <a href="/adm/feeds.php">back</a>
       <div class="body1">
            <div class="innerBody">
                <div class="head">
                    <div class="avata">
                        <img src="/defaults/studAvater.jpg/<?php echo $user_data->user_image; ?>" alt="Profile image">
                    </div>
                    <div class="usere2names">
                        <span class="sname"><?php echo  $user_data->surname;?></span>
                        <span class="fname"><?php echo  $user_data->firstname;?></span>
                        <span class="Mname"><?php echo  $user_data->midlename;?></span>
                    </div>
                    <div class="Btns">
                            <?php
                            if($is_already_friends){
                                echo '<a href="functions.php?action=unfriend_req&id='.$user_data->id.'" class="req_actionBtn unfriend"><div class="actionBtns">remove</div></a>';
                            }
                            elseif($check_req_sender){
                                echo '<a href="functions.php?action=cancel_req&id='.$user_data->id.'" class="req_actionBtn cancleRequest"><div class="actionBtns">Cancel Request</div></a>';
                            }
                            elseif($check_req_receiver){
                                echo '<a href="functions.php?action=ignore_req&id='.$user_data->id.'" class="req_actionBtn ignoreRequest"><div class="actionBtns">Ignore</div></a>&nbsp;
                                <a href="functions.php?action=accept_req&id='.$user_data->id.'" class="req_actionBtn acceptRequest">d<div class="actionBtns">Accept</div></a>';
                            }
                            else{
                                echo '<a href="functions.php?action=send_req&id='.$user_data->id.'" class="req_actionBtn sendRequest"><div class="actionBtns">Send Request</div></a>';
                            }
                            ?>
        
            </div>

                </div>

            </div>

       </div>

    </div>

 
     
        <!--https://www.webtutorials.me-->
</body>
</html>