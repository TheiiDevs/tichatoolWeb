<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portal|login</title>

    <style type="text/css">

        @import url('https://fonts.googleapis.com/icon?family=Material+Icons');

        
        body{
            background-color: white;
            font-family: 'Poppins' ,sans-serif;

        }
        

        .help{
            color: rgb(139, 134, 134);
            margin-top: 20px;
            margin-right: 50px;
        }

        .body{
            display: flex;
            justify-content: center;
        }

        .imgdiv{
            text-align: center;
        }


        img{
            width: 120px;
            margin-top: 40px;
        }

        .form{
            margin: 10px;
            width: 320px;
        }

        .input{
            text-align: center;
            margin-top: 50px;
            height: 50px;
            border: none;
            width: 100%;
            border-bottom: 0.1pt solid rgb(250, 25, 100);

        }

        .txts{
            display:flex;
            justify-content: center;
           
        }

    


        a {
        text-decoration: none;
        color: rgb(250, 25, 100);
        }

        a:hover {
        
            text-decoration:none; 
            cursor:pointer;  
        }

        h5{
            margin: 20px;
        }

        .btndiv{
            width: 100%;
            text-align: center;
          
        }

        .inpdiv{
            width: 100%;
            text-align: center; 
        }

        .checkdiv{
            margin-top: 20px;
        }

      

        #validation{
            color: blue;
        }

        button{
            background-color: rgb(250, 25, 100);
            width: 320px;
            padding: 5px;
            border-radius: 5px;
            border: none;
            color: #fff;
            margin-top: 50px;

        }

        .foot{
            text-align: center;
        }



    </style>


</head>

    <body>


        <a href=""><span class="help">help</span></a>

            <div class="body">
                
                <section>
                   
                <div style="margin-top:20px; text-align:center; width: 100%; display:flex; justify-content:center; ">
                    
                    <?php

                    include_once 'php/loginPorphp.php';
                        porlogin();
                    ?>
                </div>

                    <div class="imgdiv">
                        <img src="/logos/tichatoolweb.gif">

                    </div>
                    <div class="form">
                        <form action="" id="form" method="GET">
                        <div class="inpdiv">
                            <input class="input" type="name" id ="email" placeholder="student ID" required>
                            
                            <br>

                            <input class="input" id="password" type="password"  placeholder="password" required>
                        </div>
                                    
                                <div class="checkdiv">
                                    <input type="checkbox" id="showpass"> <span for="">show password</span>
                                </div>

                                <div id="validation">

                                </div>
                                <div class="btndiv">
                                    <button class="loginbtn"> login</button>
                                </div>
                                
                        </form>

                    </div>


                <div class="foot">
                    <div class="txts">
                        <a href="/forgotpassword"><h5>i can't remember my password</h5></a>
                        <a href="/portalReg.php"><h5>create account</h5></a>
                    </div>

                </div>
                <div class="txts">
                        <a href="/login.php"><h3>admin</h3></a>
                    </div>

                
                    
                </section>
            </div>
        
    </body>

    <script>
        const password1 = document.getElementById('password1');
        const showpass = document.getElementById('showpass');

        showpass.addEventListener( "click", handleToggleClick, false );

// I handle the toggle click, changing the TYPE of password input
function handleToggleClick( event ) {
    if ( this.checked ) {
    password.type = "text";
   

    } else {
    password.type = "password";
   

}

}

    </script>
</html>