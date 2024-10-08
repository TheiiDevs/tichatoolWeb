<?php
session_start();
session_regenerate_id(true);

require 'database.php';
require 'user.php';
require 'friend.php';

// DATABASE CONNECTIONS
$db_obj = new Database();
$db_connection = $db_obj->dbConnection();

// USER OBJECT
$user_obj = new User($db_connection);
// FRIEND OBJECT
$frnd_obj = new Friend($db_connection);
?>