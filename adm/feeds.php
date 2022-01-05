
<?php
// Initialize the session

session_start();
 
//Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login.php");
    exit;
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feeds</title>
    <link rel="stylesheet" type="text/css" href="/css/feeds.css" />

</head>
<body>
  
    <section class="header">
        <img class="logo" src="{{ asset('/logos/tichatoollogofill2.png')}}" alt="">
       <span class="headertxt">Tichatool</span>
    </section>
    <section class="navbar">
        <section class="imgbar">
            <div class="nav">
                <a href=""><div><img class="more" src="/logos/more.png" alt=""></div></a>
            </div>
            <div  class="nav">
                <a href="Admintichas"><div><img  class="img" src="/logos/teachers.png" alt=""></div></a>
            </div>
            <div  class="nav">
                <a href=""><div><img  class="img" src="/logos/post.png" alt=""></div></a>
            </div>
            <div  class="nav">
                <a href="adminstuds"><div><img  class="img" src="/logos/student1.png" alt=""></div></a>
            </div>
            <div  class="nav">
                <a href=""><div><img class="sach" src="/logos/search.png" alt=""></div></a>
            </div>
        </section>
        <section class="navtxts">
            <div class="navtxt">
                <small>more</small>
            </div>
            <div  class="navtxt">
                <small>teachers</small>
            </div>
            <div  class="navtxt">
                <small>post</small>
            </div>
            <div  class="navtxt">
                <small>students</small>
            </div>
            <div  class="navtxt">
                <small>search</small>
            </div>
    
        </section>
    </section>
        <section id="reqSection">
                 <!-- this div is to notify admin when a ticha uploads or sent requests-->
            
                 <div class="user_box">
                                        <div class="user_img">
                                            <img src="profile_images/'.$row->user_image.'" alt="Profile image">
                                        </div>
                                        <div>
                                            <div class="user_info"><span>'.$row->username.'</span>
                                            <span><a href="user_profile.php?id='.$row->sender.'" class="see_profileBtn">See profile</a></div>
                                        </div>
                                       
                                </div>
                                <?php

                                        if($get_req_num > 0){
                                            foreach($get_all_req_sender as $row){
                                                echo '  <div class="user_box">
                                                                <div class="user_img">
                                                                    <img src="profile_images/'.$row->user_image.'" alt="Profile image">
                                                                </div>
                                                                <div>
                                                                    <div class="user_info"><span>'.$row->username.'</span>
                                                                    /*
                                                                    <!--<span><a href="user_profile.php?id='.$row->sender.'" class="see_profileBtn">See profile</a></div>-->
                                                                    */
                                                                </div>
                                                            
                                                        </div>';
                                            }
                                        }
                                        else{
                                            echo '<h4>Teachers request appear here</h4>';
                                        }

               if($check_req_receiver){
                    echo '<a href="functions.php?action=ignore_req&id='.$user_data->id.'" class="req_actionBtn ignoreRequest">Ignore</a>&nbsp;
                    <a href="functions.php?action=accept_req&id='.$user_data->id.'" class="req_actionBtn acceptRequest">Accept</a>';
                }
                ?>
        </section>

    <section class="hscroll">
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>
        <div class="scroll"></div>

    </section>
    <section>
        
        
    </section>

    
</body>