<?php
//require '/xampp/htdocs/tichatool/php/db.php';
session_start();
/*

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
  
  $username = $_SESSION['username'];
  $userPhoto = "/profile_img/".$username.".jpg";
  $defaultpix = "/default/studAvater.png";
      if(!file_exists($userPhoto))
      {
        $profilePic= $defaultpix;
        
      }else{
        $profilePic= $userPhoto;
      }

      $sql = " SELECT * FROM users WHERE id='{$_SESSION["id"]}";
      $result = Query($sql);
   
          while($row=fetch_data($result)){
            $row['surname'] = $surname ;
            $row['first_name'] = $Fname;
            $row['middle_name'] = $Mname;


    
       }

   */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <script>
        const reswidth = screen.width;

        if (reswidth < 500) {
            document.write('   <link rel="stylesheet" type="text/css" href="/css/portalMobile.css" />');
        } else {
            document.write(' <link rel="stylesheet" type="text/css" href="/css/portEdit.css" />');
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <a href="/por/portal.php">
            <div style="display: flex; margin-left:10px; margin-top:10px;">
            <div>
                <img class="back" src="/logos/back.png" alt="">
            </div>
            <div style="margin-left:5px;">
                <span>back</span>
            </div>
       </div>
    </a>
    <div class="body">

      
        <div class="cont2">
           <form class="profile_form" action="">
                <div class="innercont2">
                            <div class="innercont2_1">
                                <div>
                                        <label for="">change phone:</label>
                                            <input type="phone">
                                </div>
                                <div>
                                        <label for="">change email:</label>
                                            <input type="text">
                                </div>
                                    
                            </div>
                            <div class="innercont2_1">
                                <div>
                                        <label for="">change login ID:</label>
                                            <input type="phone">
                                </div>
                                <div>
                                        <label for="">change password:</label>
                                            <input type="text">
                                </div>
                                    
                            </div>
                            <div class="innercont2_0">
                                <label for="">change address:</label><br>
                                    <input id="address" name="edit_address" type="text">
                            </div>
                                    <div  class="help">
                                            <a href="/help.php">
                                                    <span>need help?</span>
                                                </a>
                                    </div>
                    </div>
                    <button class="Form_updateBtn">update profile</button>
           </form>
           
        </div>


        <div class="cont0">
                  <div>
                        <!-- profile img-->
                            <div  class="stAvata">
                                    <img id="stAvata" src="uploads/<?php echo $image; ?>">
                            </div>

                          <div  class="cont1">
                                <form class="img_form">
                                    <input id="updatePix" type="file" name="file">
                                
                                    <button id="updateBtn">update picture</button>
                                    

                                </form>
                                <div>
                                    <button class="chooseBtn">choose picture</button>
                                </div>
                                <div  class="help">
                                        <a href="/help.php">
                                                <span>need help?</span>
                                        </a>
                                </div>
                          </div>
                            <div  class="img_msg">
                                
                            </div>
                </div>
        </div>

    </div>

    <script>
        
        $(document).ready(function(){

            //form for image imput
            $(".chooseBtn").on('click',function(e){
               //e.preventDefault();
               if($(".chooseBtn").show()){
                $("#updateBtn").show();
                $(".chooseBtn").hide();
                $(".img_msg").text("");
                 $("#updatePix").click();
                   
                    //alert("pls choose a file to upload");
                 
                }

            })

            $(".cont1").on('submit',function(e){
                        e.preventDefault();
                        // $("#updatePix").click();
                        //$("#updateBtn").text("update picture");

                        if(!$("#updatePix").val()){
                                $(".img_msg").text("pls choose a file to upload");
                                $("#updateBtn").text("choose picture");

                            }else{
                                  //submit profile 
                            var formData = new FormData(this);
                                $.ajax({
                                    url: "Peditpic_in.php", type: "POST",
                                    data: formData, cache: false,
                                    processData:false, contentType:false,
                                    success:function(data){
                                        $(".img_msg").html(data);
                                    }
                                })
                            }
                            
                          
                    })

            
           

            $("#updatePix").change(function(){
                var file = this.files[0];
                var fileType = file.type;
                var file_size = file.size;
                var match = ['image/jpeg', 'image/jpg', 'image/png'];

                if(!((fileType ==match[0]) || (fileType == match[1]) || (fileType == match[2]))){
                    $("#updatepix").val('');
                    $("#updateBtn").hide();
                    $(".chooseBtn").show();
                    $(".img_msg").text("only jpg, png and jpeg file types are allowed");
                    //alert ("only jpg, png and jpeg file types are allowed");
                    return false;
                }
                    //if file exceed 5000kb
                if(file_size > 5000000){
                    $("#updatepix").val('');
                    $("#updateBtn").hide();
                    $(".chooseBtn").show();
                    $(".img_msg").text("file exceeds 5mb");
                    //alert("file exceeds 5mb");
                    return false;
                }
            })

            //form for text iputs
            $(".profile_form").on('submit',function(e){
                e.preventDefault();
             
                
            })

           
           
            

        })

    </script>
    
</body>
</html>


