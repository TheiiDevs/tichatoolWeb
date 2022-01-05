<?php
         session_start();
        if(isset($_SESSION['username']) && isset($_SESSION['id'])){
          require '/xampp/htdocs/tichatool/php/db.php';
          if(is_Admin())
        {
          //header('location:adm/feeds.php');
            header('location: http://' .$_SERVER['HTTP_HOST'] . '/adm/feeds.php');
    
        }else{
          //header('location:por/portal.php');
          header('location: http://' .$_SERVER['HTTP_HOST'] . '/por/portal.php');
    
        }
        exit;
           
      } 
      