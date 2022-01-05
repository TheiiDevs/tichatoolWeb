<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login.php");
    exit;
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
        <style>@import url('http://fonts.cdnfonts.com/css/myriad-pro');

        body{
            background-color: #fff;
            font-family: 'Myriad Pro300', sans-serif;
            font-size: 13px;
            display: flex;
            justify-content: center;

        }

        .parent{
            min-width: 280px;
            width: 700px;

        }

            .phead{
                display: flex;
                width: 90%;
                height: 80px;
                margin-top: 20px;
                margin-left: 5%;
            }

            .profile{
                width: 70px;
               
            }

            .skuname{
                min-width: 70%;
                width: 90%;
                text-align: center;
                padding-top: 20px;
            }

            #skuname{
            color: rgb(104, 59, 85);
           font-size: 19px;
           font-weight: 700;
        }

        #motto{
            color: rgb(100, 100, 100);
           font-size: 12px;
    
        }

            .body{
                margin-top: 20px;
            }

            .btnn{
                width: 90%;
                background-color: rgb(230, 228, 228);
                margin-left: auto;
                margin-right: auto;
                margin-top: 3px;
                padding: 10px;
                text-align: center;
                border-radius: 5px;
            }

            a{
                text-decoration: none;
                color: rgb(73, 72, 72);
            }

            img{
                width: 60px;
                border-radius: 20%;
            }
        </style>
</head>
<body>
   <div class="parent">
    <section class="phead">
        <div class="profile">
            <img src="/defaults/schoollogo.png">
            <!-- school logo -->
        </div>
        <div class="skuname">
            <span id="skuname">iicomics</span>
            
            <div style="width:100%;">
                <span id="motto">study is play</span>
            </div>
            
        </div>
    </section>
    <section class="body">
        <div>
            <a href="feeds.html">
                <div class="btnn">
                    <span>feeds</span>
                </div>
            </a>
        </div>
        <div>
            <a href="plans.html">
                <div  class="btnn">
                    <span>plans</span>
                </div>
            </a>
        </div>
        <div>
            <a href="edith.html">
                <div  class="btnn">
                    <span>edit home page</span>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <div  class="btnn">
                    <span>manage your posts and ads</span>
                </div>
            </a>
        </div>
        <div>
            <a href="feeds.html">
                <div  class="btnn">
                    <span>help</span>
                </div>
            </a>
        </div>
        <div>
            <a href="/php/logoutphp.php">
                <div  class="btnn">
                    <span>logout</span>
                </div>
            </a>
        </div>
    </section>
   </div>
    
</body>
</html>