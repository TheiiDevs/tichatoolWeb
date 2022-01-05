<?php
/*
require '/xampp/htdocs/tichatool/php/db.php';
     session_start();
     if(!isset($_SESSION['username']) && !isset($_SESSION['id'])){
        header('location: http://' .$_SERVER['HTTP_HOST'] . '/login.php');
        exit;
       //require '/xampp/htdocs/tichatool/php/db.php';     
   }else{
        if(is_Admin())
        {
        //header('location:adm/feeds.php');
            header('location: http://' .$_SERVER['HTTP_HOST'] . '/adm/feeds.php');
            exit;
        }
   } 
   */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portal</title>
    <script>
        const reswidth = screen.width;

        if (reswidth < 1020) {
            document.write('   <link rel="stylesheet" type="text/css" href="/css/portalMobile.css" />');
        } else {
            document.write(' <link rel="stylesheet" type="text/css" href="/css/portalDesktop.css" />');
        }
    </script>
    <script defer src="/js/"></script>
</head>
<body>
    <!--header start-->
    <div class="hedcont">
            <!--if its owner show switch.
            else if its admin who's friend thats viewing show lock
            else if its not admin whos friend and not user show tichatool logo  to link home.
        -->

      <div class="lockdiv">
        <img style="width:15px;" src="/defaults/unlock.png" alt="">
      </div>
        
            <div class="hedadiv">
                <span id="skuname"> <!--school motto here-->iicomics College</span>
            <br>
                    <small id="motto"><!--school motto here-->study is play</small>
            </div>
        

    </div>
    <div class="AvataDiv0">
        <div class="AvataDiv">
                <div class="inAVDiv">
                    <img style="width: 100%; height: 100%; border-radius: 50%;" id="stAvata" src="/defaults/studAvater.jpg"> 
                </div>
        </div>
    
    </div>

    <!--header end-->



                <div class="usernamediv">
                    <!--username --><h3 class="stuName">micfad80</h3>
                </div>

     <!--body start-->
           <div class="body">
               <section>
                        <div class="namescont">
                                <div class="namesdiv">
                                    <label> surname:</label>
                                    <span class="stuName">Ileoegben  <?php //surname(); ?></span>
                                </div>
                                <div class="namesdiv">
                                    <label>firstname:</label>
                                    <span class="stuName">charles  <?php //firstname();  ?></span>
                                </div>
                                <div class="namesdiv">
                                    <label>middle name:</label>
                                    <span class="stuName">Ojehomon  <?php //midname();    ?></span>
                                </div>
                        </div>

                        

                        <!--button-->
                              <div style=" width: 100%; display:flex;justify-content: center;">
                                 <div>
                                    <a href="switch/php">
                                       <div  class="btndv0">
                                       <div  class="imgdiv"><img style=" width: 15px; margin: 5px;" src="/defaults/skuhome.png" alt=""></div>
                                        <div class="switchBtn"> <small>home</small></div>
                                       </div>
                                    </a>
                                 </div>
                                 <div  class="divc">
                                    <a class="switch" href="switch/php">
                                       <div  class="btndv0">
                                       <div class="imgdiv"><img  style=" width: 15px; margin: 5px;"src="/defaults/switch.png" alt=""></div>
                                        <div class="switchBtn"> <small>switch</small></div>
                                       </div>
                                    </a>
                                 </div>
                                 <div>
                                    <a class="switch" href="switch/php">
                                       <div  class="btndv0">
                                       <div  class="imgdiv"><img style=" width: 15px; margin: 5px;" src="/defaults/view_result.png" alt=""></div>
                                        <div class="switchBtn"> <small>results</small></div>
                                       </div>
                                    </a>
                                 </div>

                             </div>

                        <!--button-->

                        <!--request-->

                            <div id="reqdiv0" style="margin-top:5px; border-top:solid 1px rgb(185, 118, 160);">
                               <div style="text-align: center;">
                                    <small style="color:rgb(250, 25, 156) ;">click on request image or logo to view profile</small>
                               </div>
                                    <div style=" margin-top:20px; border-radius:10px; background-color:#fff; padding:10px; box-shadow:rgb(170, 97, 121) -1px -1px 1em -10px;">
                                            <div style="width: 90%; display:flex;">
                                                    <div>
                                                        <img style="width: 100px; border-radius:50%;" id="req_img" src="/defaults/schoollogo.png" alt="">
                                                    </div>
                                                    <div style="margin-top: 20px;padding-left:10px;"> 
                                                        <span style="color:grey;font-weight: 1000;" id="req_name">Grange college</span>
                                                        <small style="color:rgb(170, 97, 121);">is requesing to be your admin</small>
                                                        <div style="margin-top: 10px;">
                                                           <div style="display: flex; width:100%;">
                                                               <div style="width: 50%;">
                                                                    <button style=" box-shadow:rgb(170, 97, 121) -1px -1px 1em -8px; width: 70px; color: rgb(250, 25, 100); padding:2px; background-color:#fff; border:#fff;border-radius:3px;">ignore</button> 
                                                               </div>
                                                               <div  style="width: 50%;text-align:end;">
                                                                    <button style=" box-shadow:rgb(170, 97, 121) -1px -1px 1em -8px; width: 70px; color: rgb(250, 25, 100); padding:2px; background-color:#fff; border:#fff;border-radius:3px;">accept</button>    
                                                               </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                            </div>
                        
                                    </div>
                            </div>

                    

               </section>
               
            <div>
    <!--body end-->

</body>
</html>