<?php  
@$mysql = new mysqli('localhost','root','','likeforlike');

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
    exit;
} 
?>