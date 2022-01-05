<?php
         session_start();
         require '/xampp/htdocs/tichatool/php/db.php';
        if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
          header('location: http://' .$_SERVER['HTTP_HOST'] . '/login.php');
          exit;
           
        }