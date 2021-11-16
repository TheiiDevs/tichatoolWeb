<?php

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


/*function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "tichatooldb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }*/


 
   
?>